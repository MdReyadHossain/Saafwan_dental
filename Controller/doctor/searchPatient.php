<?php
require "../../Model/dbDoctor.php";

function status($stat)
{
    if ($stat == true)
        return "success";
    else if ($stat == false)
        return "secondary";
}

function statusInner($stat)
{
    if ($stat == true)
        return "Active";
    else if ($stat == false)
        return "Disable";
}

if (isset($_GET["patient"])) {
    $key = $_GET["patient"];
    $patients = searchPatient($key);
}

if ($patients->num_rows > 0) {
    echo "
    <table class='table align-items-center mb-0'>
        <thead>
            <tr>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>ID</th>
                <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Name</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Status</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Phone Number</th>
                <th class='text-secondary opacity-7'></th>
            </tr>
        </thead>
    <tbody>";
    while ($data = $patients->fetch_assoc()) {
        echo "
        <tr>
            <td class='align-middle text-center text-sm'>
                <span class='text-xs text-secondary mb-0'>" . $data['id'] . "</span>
            </td>
            <td>
                <div class='d-flex px-2 py-1'>
                    <div class='d-flex flex-column justify-content-center'>
                        <h6 class='mb-0 text-sm'>" . $data['name'] . "</h6>
                        <a href='mailto:" . $data['email'] . "' class='text-xs text-secondary mb-0'>" . $data['email'] . "</a>
                    </div>
                </div>
            </td>
            <td class='align-middle text-center text-sm'>
                <span class='text-uppercase badge badge-sm bg-gradient-" . status($data['status']) . "'>" . statusInner($data['status']) . "</span>
            </td>
            <td class='align-middle text-center text-sm'>
                <a href='tel:" . $data['phone'] . "' class='text-secondary text-xs font-weight-bold'>" . $data['phone'] . "</a>
            </td>
            <td class='align-middle'>
                <a href='patientView.php?patient-id=" . $data['id'] . "' class='btn btn-primary font-weight-bold text-xs' data-toggle='tooltip' data-original-title='Edit user'>
                    View
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
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>ID</th>
                <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Name</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Status</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Phone Number</th>
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
