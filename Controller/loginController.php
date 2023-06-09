<?php
session_start();
require "../Model/dbPatient.php";
require "smtpController.php";
$db = connect();
$docSql = $db->query("SELECT * FROM doctors");
$patSql = $db->query("SELECT * FROM patients WHERE status = true");
$sql = "SELECT * FROM patients WHERE status = false";
$disableUser = $db->query($sql);

$phone = $pass = "";
$isValid = $isEmpty = $isDoc = $isPatient = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $phone = test($_POST["phone"]);
    $pass = test($_POST["pass"]);

    if ($phone == "" || $pass == "")
        $isEmpty = true;

    if (!$isEmpty) {
        if ($docSql->num_rows > 0) {
            while ($doc = $docSql->fetch_assoc()) {
                if ($doc["phone"] == $phone and $doc["password"] == $pass) {
                    $_SESSION["doc"] = "Doctor";
                    $_SESSION["id"] = $doc["id"];
                    $_SESSION["name"] = $doc["name"];
                    $_SESSION["email"] = $doc["email"];
                    $_SESSION["phone"] = $doc["phone"];
                    $_SESSION["chamber1"] = $doc["chamber1"];
                    $_SESSION["chamber2"] = $doc["chamber2"];
                    header("location: ../View/doctor/dashboard.php");
                    $isValid = true;
                    $isDoc = true;
                }
            }
        }
        if ($patSql->num_rows > 0 and !$isDoc) {
            while ($patient = $patSql->fetch_assoc()) {
                if ($patient["phone"] == $phone and $patient["password"] == $pass) {
                    $_SESSION["patient"] = "Patient";
                    $_SESSION["id"] = $patient["id"];
                    $_SESSION["name"] = $patient["name"];
                    $_SESSION["email"] = $patient["email"];
                    $_SESSION["phone"] = $patient["phone"];
                    $_SESSION["age"] = $patient["age"];
                    $_SESSION["gender"] = $patient["gender"];
                    header("location: ../View/patient/dashboard.php");
                    $isPatient = true;
                    $isValid = true;
                }
            }
        }
        if ($disableUser->num_rows > 0 and !$isPatient) {
            while ($disable = $disableUser->fetch_assoc()) {
                if ($disable["phone"] == $phone) {
                    setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 12px'><i class='fas fa-exclamation-circle'></i> Your account already disabled, To reactive account <a href='contact.php'>contact with us</a></p>", time() + 1, "/");
                    header("location: ../View/login.php");
                    die();
                    $isValid = true;
                }
            }
        }
        if (!$isValid) {
            setcookie("reg", "<span class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 12px'><i class='fas fa-exclamation-circle'></i> Phone no or Password incorrect.</span>", time() + 1, "/");
            header("location: ../View/login.php");
        }
    } else {
        setcookie("reg", "<span class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 12px'><i class='fas fa-exclamation-circle'></i> Input all field(s).</span>", time() + 1, "/");
        header("location: ../View/login.php");
    }
}
