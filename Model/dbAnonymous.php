<?php
require "dbConnect.php";

function anonymousInsert($name, $email, $phone, $message)
{
    $db = connect();
    $createDate = date('Y-m-d');
    $sql = "INSERT INTO anonymous(name, email, phone, message, created_at, status) VALUES ('$name', '$email', '$phone', '$message', '$createDate', true)";
    if ($db->query($sql)) {
        $sql = "INSERT INTO users(name, email, phone, created_at) VALUES ('$name', '$email', '$phone', '$createDate')";
        $db->query($sql);
    } else {
        echo "Error " . $sql . "<br>" . $db->error;
    }

    $db->close();
}

function anonymousEmail($email)
{
    $db = connect();
    $createDate = date('Y-m-d');
    $sql = "INSERT INTO anonymous(email, created_at, status) VALUES ('$email', '$createDate', false)";
    if ($db->query($sql)) {
        $sql = "INSERT INTO users(email, created_at) VALUES ('$email', '$createDate')";
        $db->query($sql);
    } else {
        echo "Error " . $sql . "<br>" . $db->error;
    }

    $db->close();
}
