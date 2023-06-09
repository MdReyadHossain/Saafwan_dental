<?php
require "../../Model/dbDoctor.php";
$db = connect();
$sql = "SELECT * FROM doctors WHERE id = 1";
$doc = $db->query($sql)->fetch_assoc();

$oldPass = $error = "";
$isValid = true;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $oldPass = test($_POST["pass"]);

    if ($oldPass != $doc["password"]) {
        $error = "<span class='text-danger text-sm font-weight-bold'><i class='fas fa-times'></i> Wrong</span>";
    } else
        $error = "<span class='text-success text-sm font-weight-bold'><i class='fas fa-check'></i> Matched</span>";

    echo $error;
}
