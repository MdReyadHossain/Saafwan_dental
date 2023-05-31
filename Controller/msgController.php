<?php
include('smtpController.php');
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $mailTo = $_POST["to"];
    $mailSubject = $_POST["subject"];
    $mailMsg = $_POST["msg"];

    if ($mailTo === "" ||  $mailSubject === "" || $mailMsg === "") {
        $isValid = false;
    }

    if ($isValid) {
        $smtp = smtp_mailer($mailTo, $mailSubject, $mailMsg);
        echo $smtp;
        setcookie('msg', '<b>✅Mail Sent</b><br>', time() + 1, '/');
        header("location: ../View/msg.php");
    } else {
        echo "wrong";
        setcookie('msg', '<b>❌Fill up the form properly</b><br>', time() + 1, '/');
        header("location: ../View/msg.php");
    }
}
