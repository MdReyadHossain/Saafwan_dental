<?php
require "../Model/dbConnect.php";
require "smtpController.php";
$db = connect();
$sql = "SELECT * FROM doctors where id = 1";
$doc = $db->query($sql)->fetch_assoc();

$phone = "";
$isValid = true;
$phoneReg = '/^(0)1[3456789]\d{8}$/';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $phone = test($_POST["phone"]);
    if ($phone == "")
        $isValid = false;

    if (!preg_match($phoneReg, $phone))
        $isValid = false;

    if ($isValid) {
        $row = $db->query("SELECT * FROM patients WHERE phone = '$phone'");
        if ($row->num_rows > 0) {
            $patient = $row->fetch_assoc();
            $email = $patient["email"];
            $msg = "Dear " . $patient['name'] . ",<br>You are request to know your password, You should use this password to login to your portal.<br><h2>" . $patient['password'] . "</h2><br>Keep it on your mind, Don't share your password with anyone.<br><br>Saafwan Dental & Ortho Dontics<br>Email: " . $doc['email'] . "<br>Contact Number: " . $doc['phone'] . "";
            smtp_mailer($email, "Forget Password", $msg);

            $parts = explode('@', $email);
            $patientmail = substr($parts[0], 0, 2) . str_repeat('*', strlen($parts[0])) . '@' . $parts[1];
            setcookie("pass", "<div class='alert alert-success my-2' role='alert'><i class='fas fa-check'></i> Email has sent to your email <b>" . $patientmail . "</b> Go to <a href='login.php' class='font-weight-bold'>Login</a></div>", time() + 1, "/");
            header("location: ../View/forgetPassword.php");
        } else {
            setcookie("pass", "<div class='alert alert-danger my-2' role='alert'><i class='fas fa-exclamation-circle'></i> Phone number not registered, Go to <a href='login.php' class='font-weight-bold'>registration</a></div>", time() + 1, "/");
            header("location: ../View/forgetPassword.php");
        }
    } else {
        setcookie("pass", "<div class='alert alert-danger my-2' role='alert'><i class='fas fa-exclamation-circle'></i> Invalid Phone number</div>", time() + 1, "/");
        header("location: ../View/forgetPassword.php");
    }
}
