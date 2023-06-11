<?php
require "../../Model/dbPatient.php";
require "../smtpController.php";
session_start();
$db = connect();
$docSql = "SELECT * FROM doctors where id = 1";
$doc = $db->query($docSql)->fetch_assoc();

$id = $message = "";
$isValid = true;

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
    $message = test($_POST["message"]);

    if (empty($id) || $message == "")
        $isValid = false;

    if ($isValid) {
        sendMessage($id, $message);

        $msg = $message . "<br><br>Patient Name: " . $_SESSION["name"] . "<br>Email: " . $_SESSION["email"] . "<br>Contact Number: " . $_SESSION["phone"] . "<br><br>Saafwan Dental and Ortho Dontics";
        smtp_mailer($doc["email"], "A patient sent a new message from Saafwan.com", $msg);

        setcookie("msg", "<div class='alert alert-success my-2' role='alert'><i class='fas fa-check'></i> Message has sent.</div>", time() + 1, "/");
        header("location: ../../View/patient/contact.php");
    } else {
        setcookie("msg", "<div class='alert alert-danger my-2' role='alert'><i class='fas fa-exclamation-circle'></i> Invalid input field</div>", time() + 1, "/");
        header("location: ../../View/patient/contact.php");
    }
}
