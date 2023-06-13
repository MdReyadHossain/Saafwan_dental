<?php
function connect()
{
    $server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $dbname = "saafwan";

    // $server = "sql308.unaux.com";
    // $db_user = "unaux_34413651";
    // $db_pass = "61x3te4czqr";
    // $dbname = "unaux_34413651_saafwan";
    $conn = new mysqli($server, $db_user, $db_pass, $dbname);

    if ($conn->connect_error) {
        die("Data base Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
