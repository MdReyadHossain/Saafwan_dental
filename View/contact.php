<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Saafwan Dental & Ortho Dontics</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../Assets/img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../Assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../Assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../Assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <!-- Topbar Start -->
    <?php include("./components/header.php") ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="../" class="navbar-brand">
                    <img src="../Assets/img/saafwanLogo.png" alt="saafwan" width="200">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="../" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
                        <a href="login.php" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Any Questions?</h5>
                <h1 class="display-4">Please Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                            <i class="fa fa-2x fa-location-arrow text-white" style="transform: rotate(15deg);"></i>
                        </div>
                        <a href="https://goo.gl/maps/F2NVNdZatgLU3zuz6?coh=178571&entry=tt">
                            <h6 class="mb-0"><?php echo $doc["chamber1"] ?></h6>
                        </a>
                        <div class="my-1" style="border: 0; width: 80%; height: 1px;background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);"></div>
                        <a href="https://goo.gl/maps/UNbvXS7gSgkVrHSc9?coh=178571&entry=tt">
                            <h6 class="mb-0"><?php echo $doc["chamber2"] ?></h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a href="tel:<?php echo $doc["phone"] ?>">
                        <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                                <i class="fa fa-2x fa-phone text-white" style="transform: rotate(15deg);"></i>
                            </div>
                            <h6 class="mb-0"><?php echo $doc["phone"] ?></h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="mailto:<?php echo $doc["email"] ?>">
                        <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                                <i class="fa fa-2x fa-envelope-open text-white" style="transform: rotate(15deg);"></i>
                            </div>
                            <h6 class="mb-0"><?php echo $doc["email"] ?></h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="height: 500px;" id="location-map">
                    <div class="position-relative h-100">
                        <iframe class="position-relative h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.5262092333888!2d90.42075776961188!3d23.814870798664167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c6520d69b317%3A0x8c0b407d9eb44919!2sSaafwan%20Dental%20and%20Ortho%20Dontics!5e0!3m2!1sen!2sbd!4v1685219112880!5m2!1sen!2sbd" frameborder="0" style="border:1px solid rgb(104, 245, 255); width:50%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <iframe class="position-relative h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.270250965426!2d90.42859447575232!3d23.80898717863042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77c70a7d73f%3A0x13b6c94f7409f500!2sSaafwan%20Dental!5e0!3m2!1sen!2sbd!4v1685219171586!5m2!1sen!2sbd" frameborder="0" style="border:1px solid rgb(104, 245, 255); width:49%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center position-relative" style=" z-index: 1;" id="send-msg">
                <div class="col-lg-8">
                    <div class="bg-white shadow-lg rounded p-5 m-5 mb-0">
                        <form action="../Controller/anonymous/contactController.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control bg-light border-0" name="name" placeholder="Your Name*" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" name="email" placeholder="Your Email*" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" name="phone" placeholder="Phone Number*" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" name="message" rows="5" placeholder="Message*" required></textarea>
                                </div>
                                <?php if (isset($_COOKIE["error"])) {
                                    echo $_COOKIE["error"];
                                } ?>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <?php include('./components/footer.php') ?>
    <!-- Footer End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Assets/lib/easing/easing.min.js"></script>
    <script src="../Assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../Assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../Assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../Assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../Assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>