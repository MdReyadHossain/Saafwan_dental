<?php
require "dbConnect.php";

function searchMessageAnonymous($key)
{
    $db = connect();

    $sql = "SELECT * FROM anonymous WHERE status = true AND (name LIKE ? OR phone LIKE ?) ORDER BY id DESC";
    $stmt = $db->prepare($sql);
    $search = $key;
    $search = "%" . $search . "%";
    $stmt->bind_param("ss", $search, $search);

    $stmt->execute();
    $result = $stmt->get_result();

    $stmt->close();
    $db->close();

    return $result;
}

function searchMessagePatient($key)
{
    $db = connect();

    $sql = "SELECT patients.*, messages.* FROM messages INNER JOIN patients ON messages.patient_id = patients.id WHERE messages.status = true AND (patients.id LIKE ? OR patients.name LIKE ? OR patients.phone LIKE ?) ORDER BY messages.id DESC";
    $stmt = $db->prepare($sql);
    $search = $key;
    $search = "%" . $search . "%";
    $stmt->bind_param("sss", $search, $search, $search);

    $stmt->execute();
    $result = $stmt->get_result();

    $stmt->close();
    $db->close();

    return $result;
}

function searchAppointment($key)
{
    $db = connect();

    $sql = "SELECT patients.*, appointments.* FROM appointments INNER JOIN patients ON appointments.patient_id = patients.id WHERE appointments.user = 'doctor' AND (patients.name LIKE ? OR patients.phone LIKE ? OR patients.id LIKE ? OR appointments.status LIKE ?)";
    $stmt = $db->prepare($sql);
    $search = $key;
    $search = "%" . $search . "%";
    $stmt->bind_param("ssss", $search, $search, $search, $search);

    $stmt->execute();
    $result = $stmt->get_result();

    $stmt->close();
    $db->close();

    return $result;
}

function searchPatient($key)
{
    $db = connect();

    $sql = "SELECT * FROM patients WHERE name LIKE ? OR id LIKE ? OR phone LIKE ?";
    $stmt = $db->prepare($sql);
    $search = $key;
    $search = "%" . $search . "%";
    $stmt->bind_param("sss", $search, $search, $search);

    $stmt->execute();
    $result = $stmt->get_result();

    $stmt->close();
    $db->close();

    return $result;
}

function updateProfile($id, $name, $email, $phone, $chamber1, $chamber2, $established, $founder, $bio)
{
    $db = connect();
    $sql = "UPDATE doctors SET name = '$name', email = '$email', phone = '$phone', chamber1 = '$chamber1', chamber2 = '$chamber2', established = '$established', founder = '$founder', bio = '$bio' WHERE id = $id";
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
