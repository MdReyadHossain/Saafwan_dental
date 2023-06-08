<?php
require "../../Model/dbDoctor.php";
require "../smtpController.php";
$db = connect();
$docSql = "SELECT * FROM doctors where id = 1";
$doc = $db->query($docSql)->fetch_assoc();

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM appointments WHERE status = 'pending' AND id = $id";
    $appointmentQuery = $db->query($sql);
    if ($appointmentQuery->num_rows > 0) {
        $appointment = $appointmentQuery->fetch_assoc();
        $sql = "SELECT * FROM patients WHERE id = " . $appointment['patient_id'] . "";
        $patient = $db->query($sql)->fetch_assoc();
        $email = $patient["email"];
        $msg = "Dear " . $patient['name'] . ",<br>Due to some unavoidable circumstances, Your queued appointment has been canceled by doctor. We are sorry for this inconvenience. Thank you so much for being with us.<br>Please set appointment again after some time or contact with us,<br>Saafwan Dental & Ortho Dontics<br>Email: " . $doc['email'] . "<br>Contact Number: " . $doc['phone'] . "";
        smtp_mailer($email, "Appointment Canceled", $msg);
    }
    deleteAppointment($id);
    header("location: ../../View/doctor/appointmentHistory.php");
} else {
    header("location: ../../View/doctor/appointmentHistory.php");
}
