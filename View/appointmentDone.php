<?php
$db = connect();
$appointment = $db->query("SELECT * FROM appointments WHERE user = 'doctor' AND status = 'pending' AND appointment_at <= CURRENT_DATE - INTERVAL 3 DAY");

if ($appointment->num_rows > 0) {
    $pending = $appointment->fetch_assoc();
    $done = $db->query("UPDATE appointments SET status = 'done' WHERE user = 'doctor' AND status = 'pending' AND appointment_at <= CURRENT_DATE - INTERVAL 3 DAY");
}
