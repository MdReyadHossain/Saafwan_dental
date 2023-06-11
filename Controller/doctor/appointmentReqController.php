<?php
require "../../Model/dbDoctor.php";
require "../smtpController.php";
$db = connect();
$docSql = "SELECT * FROM doctors where id = 1";
$doc = $db->query($docSql)->fetch_assoc();

$id = $appointmentDate = $chamber = "";
$isValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $id = test($_POST["id"]);
    $appointmentDate = test($_POST["appointment-at"]);
    $chamber = test($_POST["chamber"]);
    if ($chamber == "1") {
        $chamberName = $doc["chamber1"];
        $mapLink = "https://goo.gl/maps/UNbvXS7gSgkVrHSc9?coh=178571&entry=tt";
    } else if ($chamber == "2") {
        $chamberName = $doc["chamber2"];
        $mapLink = "https://goo.gl/maps/F2NVNdZatgLU3zuz6?coh=178571&entry=tt";
    }

    if (empty($appointmentDate) || $id == "" || $chamber == "")
        $isValid = false;

    if ($isValid) {
        $sql = "SELECT * FROM patients WHERE id IN (SELECT patient_id FROM appointments WHERE id = $id)";
        $patient = $db->query($sql)->fetch_assoc();
        $email = $patient["email"];
        $msg = "Dear " . $patient['name'] . ",<br>Your appointment has been set on " . date('d-m-Y', strtotime($appointmentDate)) . " at <a href='$mapLink'>$chamberName</a>. Thank you so much.<br><br>Please don't hesitate to contact with us,<br>Saafwan Dental & Ortho Dontics<br>Email: " . $doc['email'] . "<br>Contact Number: " . $doc['phone'] . "";
        smtp_mailer($email, "Appointment Confirmation", $msg);

        updateAppointment($id, $appointmentDate, $chamber);
        header("location: ../../View/doctor/appointment.php");
    } else {
        setcookie("date-null", "Should not empty!", time() + 1, "/");
        header("location: ../../View/doctor/appointment.php");
    }
}
