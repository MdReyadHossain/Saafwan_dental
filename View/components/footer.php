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
                    <a class="text-light mb-2" href="../"><i class="fa fa-angle-right me-2"></i>Home</a>
                    <a class="text-light mb-2" href="about.php"><i class="fa fa-angle-right me-2"></i>About Us</a>
                    <a class="text-light mb-2" href="../#blog"><i class="fa fa-angle-right me-2"></i>Latest Blog</a>
                    <a class="text-light mb-2" href="contact.php"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    <a class="text-light" href="service.php"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="../"><i class="fa fa-angle-right me-2"></i>Home</a>
                    <a class="text-light mb-2" href="about.php"><i class="fa fa-angle-right me-2"></i>About Us</a>
                    <a class="text-light" href="contact.php"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">News letter</h4>
                <form action="../Controller/anonymous/anonymousEmailController.php" method="POST">
                    <div class="input-group">
                        <input type="email" class="form-control p-3 border-0" name="email" placeholder="Your Email Address" required>
                        <button class="btn btn-primary px-4" type="submit"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
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
                <p class="mb-md-0">&copy; <a class="text-primary" href="#">Saafwan Dental</a> All Rights Reserved</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0">Complete Family Dentistry</p>
            </div>
        </div>
    </div>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>