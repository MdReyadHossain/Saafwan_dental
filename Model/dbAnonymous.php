<?php
require "dbConnect.php";

function anonymousInsert($name, $email, $phone, $message)
{
    $db = connect();
    $sql = "INSERT INTO anonymous(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    if ($db->query($sql)) {
        $sql = "INSERT INTO users(name, email, phone) VALUES ('$name', '$email', '$phone')";
        $db->query($sql);
    } else {
        echo "Error " . $sql . "<br>" . $db->error;
    }

    $db->close();
}

function anonymousEmail($email)
{
    $db = connect();
    $sql = "INSERT INTO anonymous(email) VALUES ('$email')";
    if ($db->query($sql)) {
        $sql = "INSERT INTO users(email) VALUES ('$email')";
        $db->query($sql);
    } else {
        echo "Error " . $sql . "<br>" . $db->error;
    }

    $db->close();
}
