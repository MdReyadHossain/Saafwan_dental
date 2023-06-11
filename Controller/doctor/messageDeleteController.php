<?php
require "../../Model/dbDoctor.php";
$db = connect();
if (isset($_GET['patient-id'])) {
    $id = $_GET['patient-id'];
    deletePatientMessage($id);
    header("location: ../../View/doctor/messages.php");
} else if (isset($_GET['anonymous-id'])) {
    $id = $_GET['anonymous-id'];
    deleteAnonymousMessage($id);
    header("location: ../../View/doctor/messages.php");
}
