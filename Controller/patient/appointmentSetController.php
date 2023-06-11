<?php
require "../../Model/dbPatient.php";
require "../smtpController.php";
session_start();
$db = connect();
$docSql = "SELECT * FROM doctors where id = 1";
$doc = $db->query($docSql)->fetch_assoc();

$appointmentPending = $db->query("SELECT patients.*, appointments.* FROM appointments INNER JOIN patients ON appointments.patient_id = patients.id WHERE appointments.patient_id = " . $_SESSION['id'] . " AND appointments.status = 'pending' AND appointments.user = 'patient'")->fetch_assoc();

$appointmentConfirm = $db->query("SELECT patients.*, appointments.* FROM appointments INNER JOIN patients ON appointments.patient_id = patients.id WHERE appointments.patient_id = " . $_SESSION['id'] . " AND appointments.status = 'pending' AND appointments.user = 'doctor'")->fetch_assoc();

$id = $appointmentDate = $chamber = $message = "";
$isValid = true;
if ($appointmentPending["name"] == "" && $appointmentConfirm["name"] == "") {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function test($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = filter_var($data, FILTER_SANITIZE_ADD_SLASHES);
            return $data;
        }
        $id = test($_POST["id"]);
        $appointmentDate = test($_POST["appointment-date"]);
        $chamber = test($_POST["chamber"]);
        $message = test($_POST["message"]);

        if ($id == null || empty($appointmentDate) || $chamber == "") {
            $isValid = false;
            echo "Empty";
        }

        $today = new DateTime('-1 days');
        $futureDate = new DateTime('+7 days');
        $appointmentvalid = new DateTime("" . $appointmentDate . "");
        if ($appointmentvalid < $today || $appointmentvalid > $futureDate)
            $isValid = false;

        if ($isValid) {
            setAppointment($id, $appointmentDate, $chamber);
            if ($message != "")
                sendMessage($id, $message);

            setcookie("error", "<div class='alert alert-success my-2' role='alert'><i class='fas fa-check'></i> Appointment request sent.</div>", time() + 1, "/");
            header("location: ../../View/patient/appointment.php");
        } else {
            setcookie("appointment", "<p class='text-xl text-danger mb-0'><i class='fas fa-exclamation-circle'></i> Invalid input</p>", time() + 1, "/");
            header("location: ../../View/patient/appointment.php#app");
        }
    }
} else {
    setcookie("error", "<div class='alert alert-danger my-2' role='alert'><i class='fas fa-exclamation-circle'></i> An error occurred</div>", time() + 1, "/");
    header("location: ../../View/patient/appointment.php");
}
