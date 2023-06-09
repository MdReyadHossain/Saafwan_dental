<?php
require "../../Model/dbDoctor.php";
$db = connect();
$sql = "SELECT * FROM doctors WHERE id = 1";
$doc = $db->query($sql)->fetch_assoc();

$id = $oldPass = $newPass = $conPass = "";
$isValid = true;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $id = test($_POST["id"]);
    $oldPass = test($_POST["old-pass"]);
    $newPass = test($_POST["new-pass"]);
    $conPass = test($_POST["con-pass"]);

    if ($oldPass == "") {
        $isValid = false;
    }

    if ($oldPass != $doc["password"]) {
        $isValid = false;
    }

    if ($newPass == "" || $conPass == "")
        $isValid = false;

    if ($isValid) {
        changePassword($id, $newPass);
        setcookie("chng-pass", "<span class='text-success text-sm font-weight-bold'><i class='fas fa-check'></i> Password changed.</span>", time() + 1, "/");
        header("location: ../../View/doctor/changePassword.php");
    } else {
        setcookie("chng-pass", "<span class='text-danger text-sm font-weight-bold'><i class='fas fa-times'></i>  Invalid password input.</span>", time() + 1, "/");
        header("location: ../../View/doctor/changePassword.php");
    }
}
?>
<a href=""></a>