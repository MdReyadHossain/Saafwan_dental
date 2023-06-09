<?php
require "../../Model/dbPatient.php";
require "../smtpController.php";
$db = connect();
$docSql = "SELECT * FROM doctors where id = 1";
$doc = $db->query($docSql)->fetch_assoc();

if (isset($_GET["patient-id"])) {
    $id = $_GET["patient-id"];

    $sql = "SELECT * FROM patients WHERE id = $id AND status = false";
    $patient = $db->query($sql)->fetch_assoc();
    $email = $patient["email"];
    $msg = "Dear " . $patient['name'] . ",<br>Your account has been activated. Now, You can login with your phone number and given password. Please don't hesitate to contact with us,<br>Saafwan Dental & Ortho Dontics<br>Email: " . $doc['email'] . "<br>Contact Number: " . $doc['phone'] . "";
    smtp_mailer($email, "Account Activation", $msg);

    activePatient($id);
    header("location: ../../View/doctor/dashboard.php");
} else
    header("location: ../../View/doctor/dashboard.php");    
