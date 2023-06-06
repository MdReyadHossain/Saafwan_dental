<?php
session_start();
if (isset($_SESSION["doc"]))
    header("Location: doctor/dashboard.php");

else if (isset($_SESSION["patient"]))
    header("Location: patient/dashboard.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Saafwan Dental & Ortho Dontics</title>
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/css/login.scss">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="logo">
        <a href="../" class="navbar-brand">
            <img src="../Assets/img/saafwanLogo.png" alt="saafwan" width="250">
        </a>
    </div>

    <div class="form-structor">
        <div class="signup">
            <h2 class="form-title" id="signup">Login</h2>
            <form action="../Controller/loginController.php" method="POST">
                <div class="form-holder">
                    <input type="text" class="input" name="phone" placeholder="Phone Number" />
                    <input type="password" class="input" name="pass" placeholder="Password" />
                </div>
                <button type="submit" class="submit-btn">Login</button>
            </form>
            <?php
            if (isset($_COOKIE["reg"]))
                echo $_COOKIE["reg"];
            ?>
        </div>
        <div class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login">Registration</h2>
                <form action="../Controller/patient/registrationController.php" method="POST" onsubmit="return validRegistration(this)">
                    <div class="form-holder">
                        <input type="text" class="input" name="name" placeholder="Name" required />
                        <input type="email" class="input" id="email" name="email" placeholder="Email" />
                        <input type="text" class="input" id="phone" name="phone" placeholder="Phone Number(use for login)" required />
                        <input type="number" class="input" id="age" name="age" placeholder="Age" required />
                        <select name="gender" class="input" required>
                            <option value="" disabled selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <button type="submit" class="submit-btn">Sign up</button>
                </form>
                <span id='errorEmail' role='alert' style='color: red; font-weight: bold; font-size: 13px;'></span>
                <span id='errorPhone' role='alert' style='color: red; font-weight: bold; font-size: 13px;'></span>
                <span id='errorAge' role='alert' style='color: red; font-weight: bold; font-size: 13px;'></span>
            </div>
        </div>
    </div>



    <script>
        console.clear();

        const loginBtn = document.getElementById('login');
        const signupBtn = document.getElementById('signup');

        loginBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode.parentNode;
            Array.from(e.target.parentNode.parentNode.classList).find((element) => {
                if (element !== "slide-up") {
                    parent.classList.add('slide-up')
                } else {
                    signupBtn.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
        });

        signupBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode;
            Array.from(e.target.parentNode.classList).find((element) => {
                if (element !== "slide-up") {
                    parent.classList.add('slide-up')
                } else {
                    loginBtn.parentNode.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
        });
    </script>
    <script src="../Assets/js/registrationValidation.js"></script>
</body>

</html>