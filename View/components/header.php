<?php
$url = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
if ($url == "index.php")
    require "Model/dbConnect.php";
else
    require "../Model/dbConnect.php";


$db = connect();
$sql = "SELECT * FROM doctors where id = 1";
$doc = $db->query($sql)->fetch_assoc();
?>


<div class="container-fluid py-2 border-bottom d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-decoration-none text-body pe-3" href="tel:<?php echo $doc["phone"] ?>"><i class="bi bi-telephone me-2"></i><?php echo $doc["phone"] ?></a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-2" href="https://www.facebook.com/SaafwanDentalClinic">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <span class="text-body">|</span>
                    <a class="text-decoration-none text-body px-3" href="mailto:<?php echo $doc["email"] ?>"><i class="bi bi-envelope me-2"></i><?php echo $doc["email"] ?></a>
                </div>
            </div>
        </div>
    </div>
</div>