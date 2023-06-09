<?php
require "../../Model/dbDoctor.php";
require "../smtpController.php";
$db = connect();
$docSql = "SELECT * FROM doctors where id = 1";
$doc = $db->query($docSql)->fetch_assoc();

$patientId = $appointmentDate = $chamber = "";
$isValid = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $patientId = test($_POST["patient-id"]);
    $appointmentDate = test($_POST["appointment-date"]);
    $chamber = test($_POST["chamber"]);

    $appointmentSql = "SELECT * FROM appointments where patient_id = $patientId AND status = 'pending'";
    $appointmentQuery = $db->query($appointmentSql);

    if ($chamber == "1") {
        $chamberName = $doc["chamber1"];
        $mapLink = "https://goo.gl/maps/F2NVNdZatgLU3zuz6?coh=178571&entry=tt";
    } else if ($chamber == "2") {
        $chamberName = $doc["chamber2"];
        $mapLink = "https://goo.gl/maps/UNbvXS7gSgkVrHSc9?coh=178571&entry=tt";
    }

    if (empty($appointmentDate) || empty($patientId) || empty($chamber))
        $isValid = false;

    if ($appointmentQuery->num_rows > 0) {
        $isValid = false;
    }

    if ($isValid) {
        $sql = "SELECT * FROM patients WHERE id = $patientId";
        $patient = $db->query($sql)->fetch_assoc();
        $email = $patient["email"];
        $msg = "Dear " . $patient['name'] . ",<br>Your appointment has been set on $appointmentDate at <a href='$mapLink'>$chamberName</a>. Thank you so much.<br><br>Please don't hesitate to contact with us,<br>Saafwan Dental & Ortho Dontics<br>Email: " . $doc['email'] . "<br>Contact Number: " . $doc['phone'] . "";
        smtp_mailer($email, "Appointment Confirmation", $msg);

        setcookie("app", "<p class='text-xl text-success mb-0'><i class='fas fa-check'></i> Appointment has been SET.</p>", time() + 1, "/");
        setAppointment($patientId, $appointmentDate, $chamber);
        header("location: ../../View/doctor/appointment.php#app");
    } else {
        setcookie("app", "<p class='text-xl text-danger mb-0'><i class='fas fa-exclamation-circle'></i> Appointment Invalid or This patient has already been pending.</p>", time() + 1, "/");
        header("location: ../../View/doctor/appointment.php#app");
    }
}
?>

<a href="../../View/doctor/appointment.php"></a>