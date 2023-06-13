<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Saafwan Dental & Ortho Dontics</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="./Assets/img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./Assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./Assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./Assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./Assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <?php include("./View/components/header.php") ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="" class="navbar-brand">
                    <img src="./Assets/img/saafwanLogo.png" alt="saafwan" width="200">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="./View/about.php" class="nav-item nav-link">About</a>
                        <a href="./View/contact.php" class="nav-item nav-link">Contact</a>
                        <a href="./View/login.php" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Welcome To Saafwan Denatal</h5>
                    <h1 class="display-1 text-white mb-md-4">Best Dentalcare Solution In Your City</h1>
                    <div class="pt-2">
                        <a href="./View/patient/dashboard.php" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="aboutus">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="./Assets/img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">About Us</h5>
                        <h1 class="display-4">Best Dental Care For Yourself and Your Family</h1>
                    </div>
                    <p>We work with the motto of providing high-quality, affordable dental treatment in a good environment. We endeavor to dispel the myth that “a visit to the dentist is an uncomfortable experience”. <br>
                        Saafwan Dental is equipped with state-of-the-art equipment and technology. Let's have a visit us today and feel the difference!</p>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                <h6 class="mb-0">Qualified<small class="d-block text-primary">Doctor</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                <h6 class="mb-0">High-Tech<small class="d-block text-primary">Equipment</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                                <h6 class="mb-0">Accurate<small class="d-block text-primary">Testing</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                                <h6 class="mb-0">Best<small class="d-block text-primary">Services</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
                <h1 class="display-4">Excellent Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-user-md text-white"></i>
                        </div>
                        <h4 class="mb-3 text-uppercase">Qualified Doctor</h4>
                        <p class="m-0">Our Doctor has special training in dental implant and looks to
                        provide personalized care to your dental problems.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-procedures text-white"></i>
                        </div>
                        <h4 class="mb-3 text-uppercase">Best Service</h4>
                        <p class="m-0">Saafwan Dental & Ortho Dontics provide excellence as a full service dental and orthodontic care practice.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-microscope text-white"></i>
                        </div>
                        <h4 class="mb-3 text-uppercase">High-Tech Equipment</h4>
                        <p class="m-0">Our tools and devices are designed to enhance diagnosis, treatment and patient comfort, ensuring optimal dental experiences and outcomes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container-fluid py-5" id="service">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
                <h1 class="display-4">Excellent Service</h1>
            </div>
            <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="./Assets/img/price-1.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">High-Tech</h3>
                            <h1 class="display-4 text-white mb-0">Equipments
                            </h1>
                        </div>
                    </div>
                    <div class="text-center p-5">
                        <p>Our tools and devices are designed to enhance diagnosis, Treatment and patient comfort</p>
                        <p>Ensuring optimal dental experiences and outcomes.</p>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="./Assets/img/price-3.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Qualified</h3>
                            <h1 class="display-4 text-white mb-0">Doctor
                            </h1>
                        </div>
                    </div>
                    <div class="text-center p-5">
                        <p>Our Doctor has special training in dental implant and looks to
                            provide personalized care to your dental problems </p>
                        <p>And Dental Solution.</p>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="./Assets/img/price-4.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Best</h3>
                            <h1 class="display-4 text-white mb-0">Services
                            </h1>
                        </div>
                    </div>
                    <div class="text-center p-5">
                        <p>Saafwan Dental & Ortho Dontics provide excellence as a full service dental solution</p>
                        <p>And orthodontic care for youself and your family</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Pricing Plan Start -->
    <!--...-->
    <!--...-->
    <!--...-->
    <!-- Pricing Plan End -->


    <!-- Search Start -->
    <!-- <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Find A Doctor</h5>
                <h1 class="display-4 mb-4">Find A Healthcare Professionals</h1>
                <h5 class="text-white fw-normal">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
            </div>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <select class="form-select border-primary w-25" style="height: 60px;">
                        <option selected>Department</option>
                        <option value="1">Department 1</option>
                        <option value="2">Department 2</option>
                        <option value="3">Department 3</option>
                    </select>
                    <input type="text" class="form-control border-primary w-50" placeholder="Keyword">
                    <button class="btn btn-dark border-0 w-25">Search</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Search End -->


    <!-- Get in Touch Start -->
    <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0" id="location-map">
                    <div class="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d271.3082962890047!2d90.43099166947944!3d23.808826049966523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77c70a7d73f%3A0x13b6c94f7409f500!2sSaafwan%20Dental!5e0!3m2!1sen!2sbd!4v1685181601490!5m2!1sen!2sbd" width="100%" height="500" style="border: 5px solid rgb(104, 245, 255); border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center rounded p-5" id="get-in-touch">
                        <h1 class="mb-4">Get in Touch</h1>
                        <form action="./Controller/anonymous/anonymousController.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control bg-light border-0" name="name" placeholder="Your Name*" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" name="email" placeholder="Your Email*" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" name="phone" placeholder="Your Phone Number*" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <textarea class="form-control bg-light border-0" name="message" id="" cols="30" rows="4" placeholder="Send a Message*" required></textarea>
                                    </div>
                                </div>
                                <?php
                                if (isset($_COOKIE["error"])) {
                                    echo $_COOKIE["error"];
                                }
                                ?>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get in Touch End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Doctors</h5>
                <h1 class="display-4">Qualified Dentist</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="./Assets/img/team-1.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Dr. Fida Haque</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Dental Specialist</h6>
                                <p class="m-0">BDS, MPH <br>
                                    Special Trained in Implant <br>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="https://www.facebook.com/SaafwanDentalClinic"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="https://www.youtube.com/@saafwandental8071"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 w-100 h-100">
                            <img class="img-fluid h-100" src="./Assets/img/team-2.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 w-100 h-100">
                            <img class="img-fluid h-100" src="./Assets/img/team-3.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Testimonial</h5>
                <h1 class="display-4">Review About Our Services</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="./Assets/img/testimonial-1.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">Highly satisfied & recommended</p>
                            <hr class="w-25 mx-auto">
                            <h3>Ahsanul Hoque</h3>
                            <h6 class="fw-normal text-primary mb-3">Patient</h6>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="./Assets/img/testimonial-2.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">The specialist exhibited an outstanding level of professionalism and knowledge. The clinic was immaculate and equipped with state-of-the-art dental technology, creating a comfortable and hygienic environment.</p>
                            <hr class="w-25 mx-auto">
                            <h3>Reyad Hossain</h3>
                            <h6 class="fw-normal text-primary mb-3">Developer</h6>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="./Assets/img/testimonial-3.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">The best dental care I have ever experienced! Professional, courteous and friendly staff made me feel like my family. I would highly recommend it to anyone!</p>
                            <hr class="w-25 mx-auto">
                            <h3>Farhana Tania</h3>
                            <h6 class="fw-normal text-primary mb-3">Patient</h6>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="./Assets/img/testimonial-4.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">Best dentist 🦷
                            </p>
                            <hr class="w-25 mx-auto">
                            <h3>Haque Fauzia</h3>
                            <h6 class="fw-normal text-primary mb-3">Patient</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5" id="blog">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Blog Post</h5>
                <h1 class="display-4">Our Latest Blog Posts</h1>
            </div>
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6">
                    <div class="rounded overflow-hidden">
                        <iframe id="blogpost" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FSaafwanDentalClinic%2Fposts%2Fpfbid0n8bZMQ13QUv5o1cvEj9Vyo686J5EUm64BhkQerJp1Lpio7R7y9U92aEn2H2dSAFml&show_text=true&width=500" width="400" height="497" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="rounded overflow-hidden">
                        <iframe id="blogpost" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FSaafwanDentalClinic%2Fposts%2Fpfbid0QfiCCRRAkzN7xi38QmA3smVE66qTz2dDYZj7e2GCy97x8dP3GjRwoMomcKfvS2Wml&show_text=true&width=500" width="400" height="497" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="rounded overflow-hidden">
                        <iframe id="blogpost" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FSaafwanDentalClinic%2Fposts%2Fpfbid02BYWrac1rbFw4JRvj3qLWiGbZDaC7saXV9gGQLXJ58t1SQTd1b6KwFMzCHWRp2y99l&show_text=true&width=500" width="400" height="497" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Get In Touch</h4>
                    <p class="mb-4">We are a specialized dental clinic conveniently located in Dhaka, Bangladesh. Our team of specialist</p>
                    <p class="mb-2">
                        <a href="https://goo.gl/maps/F2NVNdZatgLU3zuz6?coh=178571&entry=tt" style="color: aliceblue;"><i class="fa fa-map-marker-alt text-primary me-3"></i><?php echo $doc["chamber1"] ?></a>
                    </p>
                    <p class="mb-2">
                        <a href="https://goo.gl/maps/UNbvXS7gSgkVrHSc9?coh=178571&entry=tt" style="color: aliceblue;"><i class="fa fa-map-marker-alt text-primary me-3"></i><?php echo $doc["chamber2"] ?></a>
                    </p>
                    <p class="mb-2"><a href="mailto:<?php echo $doc["email"] ?>" style="color: aliceblue;"><i class="fa fa-envelope text-primary me-3"></i><?php echo $doc["email"] ?></a></p>
                    <p class="mb-0"><a href="tel:<?php echo $doc["phone"] ?>" style="color: aliceblue;"><i class="fa fa-phone-alt text-primary me-3"></i><?php echo $doc["phone"] ?></a></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="./View/about.php"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#service"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#blog"><i class="fa fa-angle-right me-2"></i>Latest Blog</a>
                        <a class="text-light mb-2" href="./View/contact.php"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                        <a class="text-light" href="http://reyad.ezyro.com/" target="_blank"><i class="fa fa-angle-right me-2"></i>Contact Developer</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Popular Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="./View/about.php"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-light" href="./View/contact.php"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">News letter</h4>
                    <form action="./Controller/anonymous/anonymousEmailController.php" method="POST" id="anonymous-email">
                        <div class="input-group">
                            <input type="email" class="form-control p-3 border-0" name="email" placeholder="Your Email Address" required>
                            <button class="btn btn-primary px-4" type="submit"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                    <?php
                    if (isset($_COOKIE["msg"]))
                        echo $_COOKIE["msg"];
                    ?>
                    <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://www.facebook.com/SaafwanDentalClinic"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="https://www.youtube.com/@saafwandental8071"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-primary" href="#">Saafwan Dental</a> All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Complete Family Dentistry</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- Footer End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./Assets/lib/easing/easing.min.js"></script>
    <script src="./Assets/lib/waypoints/waypoints.min.js"></script>
    <script src="./Assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./Assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="./Assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="./Assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="./Assets/js/main.js"></script>
</body>

</html>