<?php
include('database.php');
session_start();
if(!isset($_SESSION['username'])){
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
    <title>Profile</title>
    <link rel="stylesheet" href="assets/style/index.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="bd-container">
        <a href="logout.php" class="logout">
            <i class='bx bx-log-out'></i>
            <p>Keluar</p>
        </a>
    </div>

    <section class="bd-container">
        <div class="profile-info">
            <div class="avatar">
                <div class="avatar-container">
                      <img src="assets/images/Avatars Default with Backdrop.png" class="avatar-img">
                </div>
                <div>
                    <a href="edit_profile.php" class="edit">
                        <i class='bx bxs-edit-alt'></i>
                    </a>
                </div>
            </div>
            <?php
            $username = $_SESSION['username'];
            //show username
            echo "<p>$username</p>";
            ?>
        </div>
    </section>

    <ul class="nav">


        <li class="indicator-container">

            <a href="home.php">
                <i class='bx bx-home-alt-2 icon'></i>
                <span class="navbar-title">Home</span>
            </a>
        </li>
        <li>
            <a href="https://api.whatsapp.com/send?phone=6281338870348&text=Halo%20Cv.%20Anugrah%20Sahahat,%20saya%20memiliki%20pertanyaan.">
                <i class='bx bx-phone icon'></i>
                <span class="navbar-title">Hubungi kami</span>
            </a>
        </li>
        <li>
            <span class="navbar-indicator"></span>
            <a href="#" class="nav-item-active">
                <i class='bx bxs-user icon'></i>
                <span class="navbar-title">Profile</span>
            </a>
        </li>
    </ul>
</body>

</html>