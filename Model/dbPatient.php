<?php
require "dbConnect.php";

function patientRegistration($name, $email, $phone, $password, $gender, $age)
{
    $db = connect();
    $createdat = date('Y-m-d');

    $sql = "INSERT INTO patients(name, email, phone, password, gender, age, created_at, status) VALUES ('$name', '$email', '$phone', '$password', '$gender', '$age', '$createdat', true)";
    if ($db->query($sql)) {
        $userSql = "SELECT * FROM patients WHERE phone = $phone";
        $user = $db->query($userSql)->fetch_assoc();
        $id = $user["id"];

        $sql = "INSERT INTO users(name, email, phone, password, gender, age, created_at, patient_id) VALUES ('$name', '$email', '$phone', '$password', '$gender', '$age', '$createdat', '$id')";
        $db->query($sql);
    } else {
        echo "Error " . $sql . "<br>" . $db->error;
    }

    $db->close();
}
