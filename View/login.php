<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FreeWebsiteCode - Wavy login form</title>
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/css/login.scss">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
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
            <form action="doctor/dashboard.php" method="POST">
                <div class="form-holder">
                    <input type="text" class="input" name="phone" placeholder="Phone Number" />
                    <input type="password" class="input" name="pass" placeholder="Password" />
                </div>
                <button type="submit" class="submit-btn">Login</button>
            </form>
        </div>
        <div class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login">Registration</h2>
                <form action="patient/dashboard.php" method="POST">
                    <div class="form-holder">
                        <input type="text" class="input" name="name" placeholder="Name" />
                        <input type="email" class="input" name="email" placeholder="Email" />
                        <input type="text" class="input" name="phone" placeholder="Phone Number(use for login)" />
                        <input type="number" class="input" name="age" placeholder="Age" />
                        <select name="gender" class="input">
                            <option value="" disabled selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <button type="submit" class="submit-btn">Sign up</button>
                </form>
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
</body>

</html>