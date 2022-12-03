<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="assets/style/index.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="bd-container">
        <img src="assets/images/logo1.jpg" class="logo-1">

        <h2 class="title-welcome">Signup</h2>

        <div style="margin-top: 32px">
            <!-- create form action for username, email, no telepon, alamat, password -->
            <form class="signup" action="prosessignup.php" method="POST">
                <div class="form-group">
                    <label for="username section-label">Username</label>
                    <input type="text" class="input" placeholder="Masukan username anda" name="username">
                </div>
                <div class="form-group
                mt-16">
                    <label for="email section-label">Email</label>
                    <input type="email" class="input" placeholder="Masukan email anda" name="email">
                </div>
                <div class="form-group
                mt-16">
                    <label for="no_telepon section-label">No Telepon</label>
                    <input type="text" class="input" placeholder="Masukan no telepon anda" name="no_telepon">
                </div>
                <div class="form-group
                mt-16">
                    <label for="alamat section-label">Alamat</label>
                    <!-- with text area -->
                    <textarea name="alamat" id="alamat" cols="30" rows="10" class="input" placeholder="Masukan alamat anda"></textarea>
                </div>
                <div class="form-group
                mt-16">
                    <label for="password section-label">Password</label>
                    <input type="password" class="input" placeholder="Masukan password anda" name="password">
                </div>
                <div class="form-group
                mt-16">
                    <label for="password section-label">Ulangi Password</label>
                    <input type="password" class="input" placeholder="Ulangi password anda" name="ulangpassword">
                </div>
                <button type="submit" class="btn-primary mt-32" name="signup">Signup</button>
            </form>
        </div>
    </section>

    <script src="assets/script/gsap.min.js"></script>
    <script src="assets/script/index.js"></script>

</body>

</html>