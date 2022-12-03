<?php
include('database.php');
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Anda harus login terlebih dahulu'); window.location.href='login.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <link rel="stylesheet" href="assets/style/index.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="bd-container">
        <a href="profile.php" class=" back-btn">
            <i class='bx bx-arrow-back'></i>
            <p>Edit profile</p>
        </a>
    </div>

    <section class="bd-container">
        <div style="margin-top: 32px">
            <form action="prosesedit.php" method="post">
                <div class="form-group mt-16">
                    <label class="section-label">Username</label>
                    <?php
                    $username = $_SESSION['username'];
                    // input text with username placeholder and readonly
                    echo "<input type='text' class='input' placeholder='$username' id='id_username' value='$username' name='username' readonly>";
                    ?>
                </div>
                <div class="form-group mt-16">
                    <label class="section-label">Password baru</label>
                    <input type="password" class="input" placeholder="Masukan password baru anda" id="passbaru">
                </div>
                <div class="form-group mt-16">
                    <label class="section-label">Ulangi Password baru</label>
                    <input type="password" class="input" placeholder="Ulangi password baru anda" id="passbaruulang">
                </div>
                <button type="submit" class="btn-primary mt-32">Ubah</button>
            </form>
        </div>
    </section>


</body>

</html>