<?php
require "../../Model/dbPatient.php";
session_start();

$id = $name = $email = $phone = $age = $gender = $chamber = "";
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
    $age = test($_POST["age"]);
    $gender = test($_POST["gender"]);
    $chamber = test($_POST["chamber"]);

    if ($id == null || $name == "" || $email == "" || $phone == "" || $age == "" || $gender == "" || $chamber == "") {
        $isValid = false;
    }

    if (!preg_match($phoneReg, $phone)) {
        $isValid = false;
        setcookie("profile", "<div class='alert alert-danger my-2' role='alert'><i class='fas fa-exclamation-circle'></i> Invalid Phone number</div>", time() + 1, "/");
        header("location: ../../View/patient/profile.php");
        die();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        setcookie("profile", "<div class='alert alert-danger my-2' role='alert'><i class='fas fa-exclamation-circle'></i> Invalid Email address</div>", time() + 1, "/");
        header("location: ../../View/patient/profile.php");
        die();
    }

    if ($isValid) {
        updateProfile($id, $name, $email, $phone, $age, $gender, $chamber);
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["phone"] = $phone;
        $_SESSION["age"] = $age;
        $_SESSION["gender"] = $gender;
        $_SESSION["default_chamber"] = $chamber;
        setcookie("profile", "<div class='alert alert-success my-2' role='alert'><i class='fas fa-check'></i> Information Updated</div>", time() + 1, "/");
        header("location: ../../View/patient/profile.php");
    } else {
        setcookie("profile", "<div class='alert alert-danger my-2' role='alert'><i class='fas fa-exclamation-circle'></i> Fill-up all fields properly</div>", time() + 1, "/");
        header("location: ../../View/patient/profile.php");
    }
}
