<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../Assets/img/favicon.png">
    <link id="pagestyle" href="../Assets/css/corporate-ui-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <title>Saafwan Dental & Ortho Dontics</title>
</head>

<body style="background-color:whitesmoke;">
    <div class="vh-100 vw-100 d-flex flex-column justify-content-center align-items-center">
        <div class="logo">
            <a href="../" class="navbar-brand">
                <img src="../Assets/img/saafwanLogo.png" alt="saafwan" width="250">
            </a>
        </div>
        <div class="col-md-4 m-4">
            <?php
            if (isset($_COOKIE["pass"]))
                echo $_COOKIE["pass"];
            ?>
            <div class="card">
                <div class="card-header pb-0">
                    <p class="text-uppercase text-sm">Forget Password</p>
                    <div class="row">
                        <form action="../Controller/forgetPasswordController.php" method="POST">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Password will sent to your Email, Type your Phone number</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>