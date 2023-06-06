<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="../../">
        <table>
            <tr>
                <td>
                    <img src="../../assets/img/favicon.png" class="navbar-brand-img" alt="main_logo">
                </td>
                <td>
                    <span class="ms-1 font-weight-bold">Saafwan Dental</span><br>
                    & Ortho Dontics
                </td>
            </tr>
        </table>
    </a>
</div>
<hr class="horizontal dark mt-0">
<div class="collapse navbar-collapse  w-auto " style="height: 700px;" id="sidenav-collapse-main">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="dashboard.php" id="dashboard">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="appointment.php" id="appointment">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-app text-info text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Set Appointment</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="messages.php" id="message">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-envelope text-warning text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Patient Messages</span>
            </a>
        </li>
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profile.php" id="profile">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="changePassword.php" id="password">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-key text-success text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Change Password</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="../logout.php">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-sign-out-alt text-danger text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Log out</span>
            </a>
        </li>
    </ul>
</div>
<script>
    let dashboard = document.getElementById("dashboard");
    let appointment = document.getElementById("appointment");
    let message = document.getElementById("message");
    let profile = document.getElementById("profile");
    let password = document.getElementById("password");

    var lastPart = function($url) {

        var url = $url;

        // Split URL into parts and store them as array 
        var parts = url.split("/");

        // Get value of last part
        var last_part = parts[parts.length - 1];

        // In case there is a '/' at the end
        if (last_part === '') last_part = parts[parts.length - 2];

        return last_part;
    }
    let route = lastPart(window.location.pathname);
    route == "dashboard.php" ?
        dashboard.classList += " active" :
        route == "appointment.php" ?
        appointment.classList += " active" :
        route == "messages.php" ?
        message.classList += " active" :
        route == "profile.php" ?
        profile.classList += " active" :
        route == "changePassword.php" ?
        password.classList += " active" : "";
</script>