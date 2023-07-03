<?php
require "../../Model/dbDoctor.php";

function status($status)
{
    if ($status == "pending")
        return "warning";

    else if ($status == "done")
        return "success";

    else if ($status == "cancel")
        return "secondary";
}

function chamber($chamber)
{
    global $doc;
    if ($chamber == "1")
        return $doc["chamber1"];

    else if ($chamber == "2")
        return $doc["chamber2"];
}

if (isset($_GET["patient"])) {
    $key = $_GET["patient"];
    $patients = searchAppointment($key);
}

if ($patients->num_rows > 0) {
    echo "
    <table class='table align-items-center mb-0'>
        <thead>
            <tr>
            <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Patient ID</th>
            <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Patient Name</th>
            <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Phone Number</th>
            <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Age/Gender</th>
            <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Status</th>
            <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Appointmented at</th>
            <th class='text-secondary opacity-7'></th>
            </tr>
        </thead>
    <tbody>";
    while ($data = $patients->fetch_assoc()) {
        echo "
            <tr>
                <td class='align-middle text-center text-sm'>
                    <a class='text-secondary text-xs font-weight-bold mb-0'>" . $data['patient_id'] . "</a>
                </td>
                <td>
                    <div class='d-flex px-2 py-1'>
                        <div class='d-flex flex-column justify-content-center'>
                            <h6 class='mb-0 text-sm'>" . $data['name'] . "</h6>
                            <a href='mailto:" . $data['email'] . "' class='text-xs text-secondary mb-0'>" . $data['email'] . "</a>
                        </div>
                    </div>
                </td>
                <td>
                    <a href='tel:" . $data['phone'] . "' class='text-secondary text-xs font-weight-bold mb-0'>" . $data['phone'] . "</a>
                </td>
                <td class='align-middle text-center text-sm'>
                    <p class='text-xs font-weight-bold mb-0'>" . $data['age'] . "</p>
                    <p class='text-xs text-secondary mb-0'>" . $data['gender'] . "</p>
                </td>
                <td class='align-middle text-center text-sm'>
                    <span class='text-uppercase badge badge-sm bg-gradient-" . status($data['status']) . "'>" . $data['status'] . "</span>
                </td>
                <td class='align-middle text-center'>
                    <p class='text-xs font-weight-bold mb-0'>" . date('d-m-Y', strtotime($data["appointment_at"])) . "</p>
                    <p class='text-xs text-secondary mb-0'>" . chamber($data['chamber']) . "</p>
                </td>
                <td class='align-middle'>
                    <a href='../../Controller/doctor/appointmentDeleteController.php?id=" . $data['id'] . "' class='btn btn-danger font-weight-bold text-xs'>
                        Delete
                    </a>
                </td>
            </tr>";
    }
    echo "
        </tbody>
    </table>";
} else {
    echo "
    <table class='table align-items-center mb-0'>
        <thead>
            <tr>
                <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Patient Name</th>
                <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Phone Number</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Age/Gender</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Status</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Appointmented at</th>
                <th class='text-secondary opacity-7'></th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td class='align-middle text-center text-sm'>
            </td>
            <td>
                <span class='text-xs text-secondary mb-0'>No record(s) found</span>
            </td>
            <td class='align-middle text-center text-sm'>
            </td>
            <td class='align-middle text-center text-sm'>
            </td>
            <td class='align-middle'>
            </td>
        </tr>
        </tbody>
    </table>";
}
