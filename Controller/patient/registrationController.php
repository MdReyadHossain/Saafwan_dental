<?php
require "../../Model/dbPatient.php";
require "../smtpController.php";
$db = connect();
$sql = "SELECT * FROM doctors where id = 1";
$doc = $db->query($sql)->fetch_assoc();

$docEmail = $doc["email"];
$docPhone = $doc["phone"];
$name = $email = $phone = $password = $age = $gender = "";
$isValid = true;
$phoneReg = '/^(0)1[3456789]\d{8}$/';

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
    $age = test($_POST["age"]);
    $gender = test($_POST["gender"]);
    $password = rand(100000, 999999);
    $sql = "SELECT * FROM patients WHERE status = true AND (phone = '$phone' OR email = '$email')";
    $user = $db->query($sql)->fetch_assoc();
    $sql = "SELECT * FROM patients WHERE status = false AND (phone = '$phone' OR email = '$email')";
    $disableUser = $db->query($sql)->fetch_assoc();

    if ($name == "" || $email == "" || $phone == "" || $gender == "" || $age == null)
        $isValid = false;

    if (!preg_match($phoneReg, $phone)) {
        $isValid = false;
        setcookie("reg", "<span class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 12px'><i class='fas fa-exclamation-circle'></i> Invalid Phone Number</span>", time() + 1, "/");
        header("location: ../../View/login.php");
        die();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 12px'><i class='fas fa-exclamation-circle'></i> Invalid Email</p>", time() + 1, "/");
        header("location: ../../View/login.php");
        die();
    }

    if ($phone == $doc["phone"]) {
        $isValid = false;
        setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 12px'><i class='fas fa-exclamation-circle'></i> This phone number cannot be used!</p>", time() + 1, "/");
        header("location: ../../View/login.php");
        die();
    }

    if ($user["name"] != "") {
        $isValid = false;
        setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 12px'><i class='fas fa-exclamation-circle'></i> This Phone or Email already registered.</p>", time() + 1, "/");
        header("location: ../../View/login.php");
        die();
    }

    if ($disableUser["name"] != "") {
        $isValid = false;
        setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 12px'><i class='fas fa-exclamation-circle'></i> Your account already disabled, To reactive <a href='contact.php'>contact with us</a></p>", time() + 1, "/");
        header("location: ../../View/login.php");
        die();
    }

    if ($isValid) {
        patientRegistration($name, $email, $phone, $password, $gender, $age);

        $msg = "Welcome to Saafwan Dental & Ortho Dontics,<br><br> Best Dentalcare Solution In Your City <br>Now you can meet with your doctor through your patient portal. You can set appointment and also contact with doctor any time. We are here to help you to solution your dental problem with our qualified doctor. <br>You should use this password to login to your portal.<br><h2>" . $password . "</h2><br>Keep it on your mind, Don't share your password with anyone.<br><br>Saafwan Dental & Ortho Dontics<br><a href='mailto:$docEmail'>$docEmail</a><br><a href='tel:$docPhone'>$docPhone</a>";
        smtp_mailer($email, "Welcome to Saafwan Dental", $msg);

        setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: green; font-weight: bold; padding: 10px; background-color: aquamarine; border: 1px solid white; border-radius: 5px; font-size: 12px; text-align: center;'><i class='fas fa-check'></i> Registration Done! Password has sent to your EMAIL</p>", time() + 1, "/");
        header("location: ../../View/login.php");
    } else {
        setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 12px'><i class='fas fa-exclamation-circle'></i> Registration Incomplete.</p>", time() + 1, "/");
        header("location: ../../View/login.php");
    }
}
