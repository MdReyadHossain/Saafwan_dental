<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../../Assets/img/favicon.png">
    <title>
        Doctor Panel
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
    <link id="pagestyle" href="../../Assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <!-- Sidebar -->
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 fixed-start " id="sidenav-main">
        <?php include("../components/doctorSidebar.php"); ?>
    </aside>

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Doctor</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Doctor Profile</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Profile</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <h6 class="font-weight-bolder text-white mb-0">Doctor Panal</h6>
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer text-lg"></i>
                            </a>
                        </li>
                        <li class="nav-item ps-2 d-flex align-items-center dropdown">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../../Assets/img/profile.jpg" class="avatar avatar-sm" alt="avatar" />
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
                                                    <span class="text-dark font-weight-bold">Log out</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center m-4">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white">>></i>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row mx-1 my-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Patients</p>
                                    <h5 class="font-weight-bolder">
                                        <?php echo $allPatients->num_rows ?>
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">Saafwan Dental & Ortho Dontics</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-8">
                    <form action="../../Controller/doctor/updateProfileController.php" method="POST">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-center">
                                    <p class="mb-0"><b>Edit Profile</b></p>
                                    <button class="btn btn-primary btn-sm ms-auto" type="submit">Submit</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-uppercase text-sm">User Information</p>
                                <?php
                                if (isset($_COOKIE['update']))
                                    echo $_COOKIE['update'];
                                ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Name</label>
                                            <input class="form-control" type="text" name="name" value="<?php echo $_SESSION['name'] ?>" required>
                                            <input type="number" name="id" value="<?php echo $_SESSION['id'] ?>" hidden>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Chamber-1</label>
                                            <input class="form-control" type="text" name="chamber1" value="<?php echo $_SESSION['chamber1'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Chamber-2</label>
                                            <input class="form-control" type="text" name="chamber2" value="<?php echo $_SESSION['chamber2'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark">
                                <p class="text-uppercase text-sm">Contact Information</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Email address</label>
                                            <input class="form-control" type="email" name="email" value="<?php echo $_SESSION['email'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Phone Number</label>
                                            <input class="form-control" type="text" name="phone" value="<?php echo $_SESSION['phone'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark">
                                <p class="text-uppercase text-sm">About me</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">About me</label>
                                            <input class="form-control" type="text" style="cursor: not-allowed;" value="We are a specialized dental clinic conveniently located in Dhaka, Bangladesh. Our team of specialist" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <img src="../../Assets/img/team-4.jpg" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-4 col-lg-4 order-lg-2">
                                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                    <a href="javascript:;">
                                        <img src="../../Assets/img/profile.jpg" class="rounded-circle img-fluid border border-2 border-white">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-center mt-4">
                                        <div class="d-grid text-center">
                                            <span class="text-lg font-weight-bolder"><?php echo $allPatients->num_rows ?></span>
                                            <span class="text-sm opacity-8">Patient</span>
                                        </div>
                                        <div class="d-grid text-center mx-4">
                                            <span class="text-lg font-weight-bolder"><?php echo $malePatients->num_rows ?></span>
                                            <span class="text-sm opacity-8">Male</span>
                                        </div>
                                        <div class="d-grid text-center">
                                            <span class="text-lg font-weight-bolder"><?php echo $femalePatients->num_rows ?></span>
                                            <span class="text-sm opacity-8">Female</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <h5>
                                    <?php echo $doc['name'] ?>
                                </h5>
                                <div class="h6 font-weight-300">
                                    <i class="ni location_pin mr-2"></i><?php echo $doc['email'] ?>
                                </div>
                                <div class="h6 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i>Managing Director
                                </div>
                                <div>
                                    <i class="ni education_hat mr-2"></i>Saafwan Dental & Ortho Dontics
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
            </div>
            <!-- footer  -->
            <?php include("../components/doctorFooter.php"); ?>
        </div>
    </main>
    <div class="fixed-plugin">
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Theme Configurator</h5>
                    <p>Change your dashboard looks.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0 overflow-auto">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
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
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
                </div>
                <!-- Dark Mode -->
                <hr class="horizontal dark my-sm-4">
                <div class="mt-2 mb-5 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                    </div>
                </div>
            </div>
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