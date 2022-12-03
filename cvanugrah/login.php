<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/style/index.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- call bootstrap -->

</head>

<body>
    <img src="assets/images/logo1.jpg" class="logo-1 bd-container">

    <section class="bd-container">

        <h2 class="title-welcome">Hey,<br> Selamat datang 👋</h2>

        <div class="login" style="margin-top: 32px;">
            <!-- form action method post -->
            <form action="proseslogin.php" method="post">
                <!-- create username & password -->
                <div class="form-group
                ">
                    <label for="username" class="section-label">Username</label>
                    <input type="text" class="input" placeholder="Masukan username anda" name="username">
                </div>
                <div class="form-group
                mt-16">
                    <label for="password" class="section-label">Password</label>
                    <input type="password" class="input" placeholder="Masukan password anda" name="password">
                </div>
                <button type="submit" class="btn-primary mt-32">Login</button>
            </form>

            <div class="divider">
                <div class="vektor"></div>
                <span>Or</span>
                <div class="vektor"></div>
            </div>
            <!-- signup button with href -->
            <a href="signup.php" class="btn-secondary">Sign up</a>
        </div>
    </section>


    <script src="assets/script/gsap.min.js"></script>
    <script src="assets/script/index.js">

    </script>

</body>

</html>