<?php
require "../../Model/dbPatient.php";
require "../smtpController.php";
session_start();
$db = connect();

$appointmentPending = $db->query("SELECT patients.*, appointments.* FROM appointments INNER JOIN patients ON appointments.patient_id = patients.id WHERE appointments.patient_id = " . $_SESSION['id'] . " AND appointments.status = 'pending' AND appointments.user = 'patient'")->fetch_assoc();

$appointmentConfirm = $db->query("SELECT patients.*, appointments.* FROM appointments INNER JOIN patients ON appointments.patient_id = patients.id WHERE appointments.patient_id = " . $_SESSION['id'] . " AND appointments.status = 'pending' AND appointments.user = 'doctor'")->fetch_assoc();

if ($appointmentPending["name"] == "" && $appointmentConfirm["name"] == "") {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $appointmentDate = date('Y-m-d');
        $chamber = $_SESSION['default_chamber'];
        setAppointment($id, $appointmentDate, $chamber);
        header("location: ../../View/patient/dashboard.php");
    } else {
        setcookie("error", "<div class='alert alert-danger my-2' role='alert'><i class='fas fa-exclamation-circle'></i> An error occurred, Please set appointment manually below <i class='fas fa-arrow-down'></i></div>", time() + 1, "/");
        header("location: ../../View/patient/appointment.php");
    }
} else {
    setcookie("error", "<div class='alert alert-danger my-2' role='alert'><i class='fas fa-exclamation-circle'></i> An error occurred</div>", time() + 1, "/");
    header("location: ../../View/patient/appointment.php");
}
