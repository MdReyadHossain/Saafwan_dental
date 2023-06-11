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

function setAppointment($id, $appointmentDate, $chamber)
{
    $db = connect();
    $createDate = date('Y-m-d');
    $sql = "INSERT INTO appointments(user, chamber, appointment_at, created_at, status, patient_id) VALUES ('patient', '$chamber', '$appointmentDate', '$createDate', 'pending', '$id')";
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
    $sql = "DELETE FROM appointments WHERE id = $id";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
}

function sendMessage($id, $message)
{
    $db = connect();
    $createDate = date('Y-m-d');
    $sql = "INSERT INTO messages(message, created_at, status, patient_id) VALUES ('$message', '$createDate', true, '$id')";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
}

function updateProfile($id, $name, $email, $phone, $age, $gender, $chamber)
{
    $db = connect();
    $sql = "UPDATE patients SET name = '$name', email = '$email', phone = '$phone', age = '$age', gender = '$gender', default_chamber = '$chamber' WHERE id = $id";
    try {
        if ($db->query($sql)) {
            $sql = "UPDATE users SET name = '$name', email = '$email', phone = '$phone', age = '$age', gender = '$gender' WHERE patient_id = $id";
            $db->query($sql);
        }
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
}

function deletePatient($id)
{
    $db = connect();
    $sql = "UPDATE patients SET status = false WHERE id = $id";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
}

function activePatient($id)
{
    $db = connect();
    $sql = "UPDATE patients SET status = true WHERE id = $id";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
}
