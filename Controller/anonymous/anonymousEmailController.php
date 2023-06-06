<?php
require "../../Model/dbAnonymous.php";
require "../smtpController.php";
$db = connect();
$sql = "SELECT * FROM doctors where id = 1";
$doc = $db->query($sql)->fetch_assoc();

$email = "";
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = test($_POST["email"]);

    if ($email == "")
        $isValid = false;

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        setcookie("msg", "<div class='my-1 alert alert-danger' role='alert'><i class='fas fa-exclamation-circle'></i> Invalid Email</div>", time() + 1, "/");
        header("location: ../../#anonymous-email");
        die();
    }

    if ($isValid) {
        anonymousEmail($email);
        setcookie("msg", "<div class='my-1 alert alert-success' role='alert'><i class='fas fa-check'></i> Email Sent to Doctor</div>", time() + 1, "/");

        $msg = "A new user has sent an email from Saafwan.com<br>" .
            "You can contact thorugh this Email<br>" .
            "<br>" .
            "Email: " . $email . "<br>" .
            "<br>" .
            "<a href='https://saafwan.com/'>Saafwan Dental and Ortho Dontics</a>";
        smtp_mailer($doc["email"], "Sent a new email from Saafwan.com", $msg);

        header("location: ../../#anonymous-email");
    } else {
        setcookie("msg", "<div class='my-1 alert alert-danger' role='alert'><i class='fas fa-exclamation-circle'></i> Input Field Should not be empty!</div>", time() + 1, "/");
        header("location: ../../#anonymous-email");
    }
}
