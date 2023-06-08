<?php
require "../../Model/dbAnonymous.php";
require "../smtpController.php";
$db = connect();
$sql = "SELECT * FROM doctors where id = 1";
$doc = $db->query($sql)->fetch_assoc();

$name = $email = $phone = $message = "";
$phoneReg = '/^(\+?880|0)1[3456789]\d{8}$/';
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = test($_POST["name"]);
    $email = test($_POST["email"]);
    $phone = test($_POST["phone"]);
    $message = test($_POST["message"]);

    if ($name == "" || $email == "" || $phone == "" || $message == "") {
        $isValid = false;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        setcookie("error", "<span class='alert alert-danger' role='alert'><i class='fas fa-exclamation-circle'></i> Invalid Email</span>", time() + 1, "/");
        header("location: ../../View/contact.php#send-msg");
        die();
    }

    if (!preg_match($phoneReg, $phone)) {
        $isValid = false;
        setcookie("error", "<span class='alert alert-danger' role='alert'><i class='fas fa-exclamation-circle'></i> Invalid Phone Number</span>", time() + 1, "/");
        header("location: ../../View/contact.php#send-msg");
        die();
    }

    if ($isValid) {
        $msg = $message . "<br><br>Email: " . $email . "<br>Contact Number: " . $phone . "<br><br><a href='https://saafwan.com/'>Saafwan Dental and Ortho Dontics</a>";
        smtp_mailer($doc["email"], $name . " sent new message from Saafwan.com", $msg);

        anonymousInsert($name, $email, $phone, $message);
        setcookie("error", "<span class='alert alert-success' role='alert'><i class='fas fa-check'></i> Massege Sent. Doctor will contact you with your given Email or Phone number soon.</span>", time() + 1, "/");
        header("location: ../../View/contact.php#send-msg");
    } else {
        setcookie("error", "<span class='alert alert-danger' role='alert'><i class='fas fa-exclamation-circle'></i> Input Field Should not be empty!</span>", time() + 1, "/");
        header("location: ../../View/contact.php#send-msg");
    }
}
