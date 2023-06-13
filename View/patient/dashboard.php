<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../../Assets/img/favicon.png">
    <title>
        Patient Panel
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../../Assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../Assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../../Assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../../Assets/css/corporate-ui-dashboard.css?v=1.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start" id="sidenav-main">
        <?php include("../components/patientSidebar.php"); ?>
    </aside>

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded" id="" navbar-scroll="true">
            <div class="container-fluid py-1 px-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-1 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Patient</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bold mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <h6 class="font-weight-bolder text-black mb-0">Patient Panal</h6>
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line">>></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item dropdown ps-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" title="<?php echo $_SESSION["name"]; ?>">
                                <img src="../../Assets/img/patient.png" class="avatar avatar-sm" alt="avatar" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                <li class="">
                                    <a class="dropdown-item border-radius-md" href="../logout.php">
                                        <div class="d-flex">
                                            <div class="my-auto">
                                                <i class="fas fa-sign-out-alt text-danger text-sm opacity-10 border-radius-sm me-3"></i>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal">
                                                    <span class="font-weight-bold">Log out</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-md-flex align-items-center mb-3 mx-2">
                        <div class="mb-md-0 mb-3">
                            <h3 class="font-weight-bold mb-0">Hello, <?php echo $_SESSION["name"] ?></h3>
                            <p class="mb-0">Welcome to Saafwan Dental & Ortho Dontics!</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-0">
            <div class="container-fluid py-2">
                <div class='row my-3'>
                    <div class='card'>
                        <div class='card-body'>
                            <div class='row'>
                                <div class='col-8'>
                                    <div class='numbers'>
                                        <p class='text-dark text-sm mb-0 font-weight-bold'>
                                            <?php
                                            if ($appointmentConfirm["name"] != "")
                                                echo "Upcoming Appointment";
                                            else if ($appointmentPending["name"] != "")
                                                echo "Please wait for Doctor confirmation. Appointment Pending...";
                                            else
                                                echo "For set an appointment or meet with doctor, Click on <b class='text-lg'>Meet Doctor</b> button";
                                            ?>
                                        </p>
                                        <h5 class='font-weight-bolder'>
                                            <?php
                                            if ($appointmentConfirm["name"] != "")
                                                echo date('d-m-Y', strtotime($appointmentConfirm["appointment_at"]));
                                            ?>
                                        </h5>
                                        <p class='mb-0'>
                                            <span class='text-success text-sm font-weight-bolder'>
                                                <?php
                                                if ($appointmentConfirm["name"] != "")
                                                    echo $doc["chamber" . $appointmentConfirm["chamber"] . ""];
                                                ?>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class='col-4 text-end'>
                                    <div class='shadow-primary text-center'>
                                        <?php
                                        if ($appointmentPending["name"] != "") {
                                            echo "
                                                <a href='../../Controller/patient/appointmentCancelController.php?appointment=" . $appointmentPending['id'] . "' type='button' class='btn btn-danger btn-sm  btn-icon d-flex justify-content-center ms-md-auto mb-2 mr-4 p-2 w-lg-25 w-md-25'>
                                                    <span class='btn-inner--text text-center'>Cancel</span>
                                                </a>
                                            ";
                                        } else if ($appointmentPending["name"] == "" && $appointmentConfirm["name"] == "") {
                                            echo "
                                                <a type='button' href='../../Controller/patient/appointmentNowController.php?id=" . $_SESSION['id'] . "' class='btn btn-primary btn-sm  btn-icon d-flex justify-content-center ms-md-auto mb-2 mr-4 p-2 w-lg-25 w-md-25'>
                                                    <span class='btn-inner--text'>Meet Doctor</span>
                                                </a>
                                            ";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mb-5">
                    <div class="col-lg-4">
                        <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                                <i class="fa fa-2x fa-location-arrow text-white" style="transform: rotate(15deg);"></i>
                            </div>
                            <a href="https://goo.gl/maps/F2NVNdZatgLU3zuz6?coh=178571&entry=tt">
                                <h6 class="mb-0"><?php echo $doc["chamber1"]; ?></h6>
                            </a>
                            <div class="my-1" style="border: 0; width: 80%; height: 1px;background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);"></div>
                            <a href="https://goo.gl/maps/UNbvXS7gSgkVrHSc9?coh=178571&entry=tt">
                                <h6 class="mb-0"><?php echo $doc["chamber2"]; ?></h6>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <a href="tel:<?php echo $doc["phone"]; ?>">
                            <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                                <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                                    <i class="fa fa-2x fa-phone text-white" style="transform: rotate(15deg);"></i>
                                </div>
                                <h6 class="mb-0"><?php echo $doc["phone"]; ?></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="mailto:<?php echo $doc["email"]; ?>">
                            <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                                <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                                    <i class="fa fa-2x fa-envelope-open text-white" style="transform: rotate(15deg);"></i>
                                </div>
                                <h6 class="mb-0"><?php echo $doc["email"]; ?></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include("../components/patientFooter.php"); ?>
        </div>
    </main>
    <div class="fixed-plugin">
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Corporate UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-slate-900" onclick="sidebarType(this)">Dark</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../../Assets/js/core/popper.min.js"></script>
    <script src="../../Assets/js/core/bootstrap.min.js"></script>
    <script src="../../Assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../Assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../../Assets/js/plugins/chartjs.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../Assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>