<?php
require "../../Model/dbPatient.php";
require "../smtpController.php";
session_start();
$db = connect();
$docSql = "SELECT * FROM doctors where id = 1";
$doc = $db->query($docSql)->fetch_assoc();

$appointmentPending = $db->query("SELECT patients.*, appointments.* FROM appointments INNER JOIN patients ON appointments.patient_id = patients.id WHERE appointments.patient_id = " . $_SESSION['id'] . " AND appointments.status = 'pending' AND appointments.user = 'patient'")->fetch_assoc();

$isError = true;
if ($appointmentPending["name"] != "") {
    if (isset($_GET['appointment'])) {
        $id = $_GET['appointment'];
        cancelAppointment($id);

        $isError = false;
    }
}
if ($isError) {
    setcookie("error", "<div class='alert alert-danger my-2' role='alert'><i class='fas fa-exclamation-circle'></i> An error occurred</div>", time() + 1, "/");
    header("location: ../../View/patient/appointment.php");
} else
    header("location: ../../View/patient/dashboard.php");
