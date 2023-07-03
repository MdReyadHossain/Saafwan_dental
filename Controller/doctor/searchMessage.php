<?php
require "../../Model/dbDoctor.php";

function message($msg)
{
    if (strlen($msg) > 25) {
        $msg = substr($msg, 0, 24) . "...";
    }
    return $msg;
}

if (isset($_GET["patient"])) {
    $key = $_GET["patient"];
    $patients = searchMessagePatient($key);
    $anonymous = searchMessageAnonymous($key);
    echo "
    <table class='table align-items-center mb-0'>
        <thead>
            <tr>
                <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Patient Name</th>
                <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Message</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Phone No</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Recieved</th>
                <th class='text-secondary opacity-7'></th>
            </tr>
        </thead>
    <tbody>";
}

if ($patients->num_rows > 0) {
    while ($data = $patients->fetch_assoc()) {
        echo "
        <tr>
            <td>
                <div class='d-flex px-2 py-1'>
                    <div class='d-flex flex-column justify-content-center'>
                        <h6 class='mb-0 text-sm'>" . $data['name'] . "<span class='text-secondary mb-0'> (" . $data['patient_id'] . ")</span></h6>
                        <a href='mailto:" . $data['email'] . "' class='text-xs text-secondary mb-0'>" . $data['email'] . "</a>
                    </div>
                </div>
            </td>
            <td class=''>
                <p class='text-xs font-weight-bold mb-0'>" . message($data['message']) . "</p>
            </td>
            <td class='align-middle text-center text-sm'>
                <a href='tel:" . $data['phone'] . "' class='text-xs text-secondary font-weight-bold mb-0'>" . $data['phone'] . "</a>
            </td>
            <td class='align-middle text-center'>
                <span class='text-secondary text-xs font-weight-bold'><p class='text-xs font-weight-bold mb-0'>" . date('d-m-Y', strtotime($data['created_at'])) . "</p></span>
            </td>
            <td style='text-align: center;'>
                <a href='messageView.php?patient-id=" . $data['id'] . "' class='btn btn-primary font-weight-bold text-xs'>
                    View
                </a>
                <a href='../../Controller/doctor/messageDeleteController.php?patient-id=" . $data['id'] . "' class='btn btn-danger font-weight-bold text-xs'>
                    <i class='fas fa-trash-alt mx-1'></i>
                </a>
            </td>
        </tr>";
    }
}
if ($anonymous->num_rows > 0) {
    while ($data = $anonymous->fetch_assoc()) {
        echo "
        <tr>
            <td>
                <div class='d-flex px-2 py-1'>
                    <div class='d-flex flex-column justify-content-center'>
                        <h6 class='mb-0 text-sm'>" . $data['name'] . " <span class='text-secondary mb-0'>(Anonymous)</span></h6>
                        <a href='mailto:" . $data['email'] . "' class='text-xs text-secondary mb-0'>" . $data['email'] . "</a>
                    </div>
                </div>
            </td>
            <td class=''>
                <p class='text-xs font-weight-bold mb-0'>" . message($data['message']) . "</p>
            </td>
            <td class='align-middle text-center text-sm'>
                <a href='tel:" . $data['phone'] . "' class='text-secondary text-xs font-weight-bold mb-0'>" . $data['phone'] . "</a>
            </td>
            <td class='align-middle text-center'>
                <span class='text-secondary text-xs font-weight-bold'><p class='text-xs font-weight-bold mb-0'>" . date('d-m-Y', strtotime($data['created_at'])) . "</p></span>
            </td>
            <td style='text-align: center;'>
                <a href='messageView.php?anonymous-id=" . $data['id'] . "' class='btn btn-primary font-weight-bold text-xs'>
                    View
                </a>
                <a href='../../Controller/doctor/messageDeleteController.php?anonymous-id=" . $data['id'] . "' class='btn btn-danger font-weight-bold text-xs'>
                    <i class='fas fa-trash-alt mx-1'></i>
                </a>
            </td>
        </tr>";
    }
}
echo "
    </tbody>
</table>";
