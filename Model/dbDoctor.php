<?php
require "dbConnect.php";

function updateProfile($id, $name, $email, $phone, $chamber1, $chamber2)
{
    $db = connect();
    $sql = "UPDATE doctors SET name = '$name', email = '$email', phone = '$phone', chamber1 = '$chamber1', chamber2 = '$chamber2' WHERE id = $id";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
}

function changePassword($id, $password)
{
    $db = connect();
    $sql = "UPDATE doctors SET password = '$password' WHERE id = $id";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
}

function setAppointment($patientId, $appointmentDate, $chamber)
{
    $db = connect();
    $createDate = date('Y-m-d');
    $sql = "INSERT INTO appointments(user, chamber, appointment_at, created_at, status, patient_id) VALUES ('doctor', '$chamber', '$appointmentDate', '$createDate', 'pending', '$patientId')";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
}

function updateAppointment($id, $appointmentDate, $chamber)
{
    $db = connect();
    $sql = "UPDATE appointments SET appointment_at = '$appointmentDate', user = 'doctor', chamber = '$chamber' WHERE id = $id";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
}

function cancelAppointment($id)
{
    $db = connect();
    $cancelDate = date('Y-m-d');
    $sql = "UPDATE appointments SET user = 'doctor', status = 'cancel', cancel_at = '$cancelDate' WHERE id = $id";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
}

function deleteAppointment($id)
{
    $db = connect();
    $sql = "DELETE FROM appointments WHERE id = $id";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
}

function deletePatientMessage($id)
{
    $db = connect();
    $sql = "UPDATE messages SET status = false WHERE id = $id";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
}

function deleteAnonymousMessage($id)
{
    $db = connect();
    $sql = "UPDATE anonymous SET status = false WHERE id = $id";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
}
