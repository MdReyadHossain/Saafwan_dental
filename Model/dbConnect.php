<?php
function connect()
{
    $server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $dbname = "saafwan";
    $conn = new mysqli($server, $db_user, $db_pass, $dbname);

    if ($conn->connect_error) {
        die("Data base Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
