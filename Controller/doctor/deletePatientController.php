<?php
require "../../Model/dbPatient.php";
require "../smtpController.php";
$db = connect();
$docSql = "SELECT * FROM doctors where id = 1";
$doc = $db->query($docSql)->fetch_assoc();

if (isset($_GET["patient-id"])) {
    $id = $_GET["patient-id"];

    $sql = "SELECT * FROM patients WHERE id = $id";
    $patient = $db->query($sql)->fetch_assoc();
    $email = $patient["email"];
    $msg = "Dear " . $patient['name'] . ",<br>Your account has been <b>deleted</b> by the doctor. Any futher, contact with us,<br>Saafwan Dental & Ortho Dontics<br>Email: " . $doc['email'] . "<br>Contact Number: " . $doc['phone'] . "";
    smtp_mailer($email, "Account Permanently Deleted", $msg);

    deletePatient($id);
    header("location: ../../View/doctor/dashboard.php");
} else
    header("location: ../../View/doctor/dashboard.php");
