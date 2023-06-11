<?php
require "../../Model/dbDoctor.php";
session_start();

$id = $name = $email = $phone = $chamber1 = $chamber2 = "";
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
    $id = test($_POST["id"]);
    $name = test($_POST["name"]);
    $email = test($_POST["email"]);
    $phone = test($_POST["phone"]);
    $chamber1 = test($_POST["chamber1"]);
    $chamber2 = test($_POST["chamber2"]);

    if ($id == null || $name == "" || $email == "" || $phone == "" || $chamber1 == "" || $chamber2 == "") {
        $isValid = false;
    }

    if (!preg_match($phoneReg, $phone)) {
        $isValid = false;
        setcookie("update", "<div class='text-danger text-xl font-weight-bold' role='alert'><i class='fas fa-exclamation'></i> Invalid Phone number</div>", time() + 1, "/");
        header("location: ../../View/doctor/profile.php");
        die();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        setcookie("update", "<div class='text-danger text-xl font-weight-bold' role='alert'><i class='fas fa-exclamation'></i> Invalid Email address</div>", time() + 1, "/");
        header("location: ../../View/doctor/profile.php");
        die();
    }

    if ($isValid) {
        updateProfile($id, $name, $email, $phone, $chamber1, $chamber2);
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["phone"] = $phone;
        $_SESSION["chamber1"] = $chamber1;
        $_SESSION["chamber2"] = $chamber2;
        setcookie("update", "<div class='text-success text-xl font-weight-bold' role='alert'><i class='fas fa-check'></i> Information Updated</div>", time() + 1, "/");
        header("location: ../../View/doctor/profile.php");
    } else {
        setcookie("update", "<div class='text-danger text-xl font-weight-bold' role='alert'><i class='fas fa-exclamation'></i> Fill-up all fields properly</div>", time() + 1, "/");
        header("location: ../../View/doctor/profile.php");
    }
}
