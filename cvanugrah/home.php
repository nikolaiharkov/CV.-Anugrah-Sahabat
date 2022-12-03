<!DOCTYPE html>
<?php
//require database.php
include('database.php');
//redirect to login page if session is not set, alert anda harus login terlebih dahulu
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Anda harus login terlebih dahulu'); window.location.href='login.php';</script>";
    exit();
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/style/index.css" />

</head>

<body>
    <section class="top">
        <div class="logo">
            <img src="assets/images/logo2.png" class="logo-2">
            <h3 class="logo-title">CV. ANUGRAH SAHABAT</h3>
        </div>
    </section>

    <!-- Main feature -->
    <section class="main-feature bd-container">
        <div class="cards-main-feature">
            <a href="form_bangun_baru.php" class="card-main-feature bangun">
                <div>
                    <img src="assets/images/bangun.png">
                    <h3>Bangun baru</h3>
                </div>
            </a>
            <a href="form_bangun_baru.php" class="card-main-feature renov">
                <div>
                    <img src="assets/images/renov.png">
                    <h3>Renovasi</h3>
                </div>
            </a>
        </div>
    </section>

    <!-- Portofolio -->
    <!-- Portofolio -->
    <section class="mt-32 bd-container">
        <!-- create card -->

        <h3 class="section-title">Portofolio</h3>
        <div #swiperRef="" class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                // show data from table portofolio DESC
                $query = mysqli_query($db, "SELECT * FROM portofolio ORDER BY id DESC");
                $string = $query;
                while ($data = mysqli_fetch_array($query)) {
                    $string = $data;
                    $new_string =  mb_strimwidth($string['judul'], 0, 26, "...");
                ?>
                    <div class="swiper-slide">
                        <a href=<?php echo $data['gdrive']; ?> target="_blank" class="card-portofolio" style="text-decoration: none;">
                            <!-- img src from ../cvanugrahadmin/assets/portofolio/ -->
                            <img src=<?php //echo location ../cvanugrahadmin/assets/portofolio/ . $data['img'];
                                        echo "../cvanugrahadmin/assets/portofolio/" . $data['foto']; ?> class="porto-img">
                            <div class="portofolio-text">
                                <?php
                                //echo <p> "judul" </p>
                                echo "<p>" . $new_string . "</p>";

                                ?>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
                <div class="swipper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- keunggulan -->
    <section class="mt-32 bd-container">
        <h3 class="section-title">Keunggulan kami</h3>
        <div class="cards-keunggulan">
            <a href="#" class="card-keunggulan">
                <img src="assets/images/CLOCK.png" class="keunggulan-img">
                <p>Fast response</p>
            </a>
            <a href="#" class="card-keunggulan" style="gap: 9px;">
                <img src="assets/images/Asset 34.png" style="width: 70px; height: 53px;" class="keunggulan-img">
                <p>Free konsultasi</p>
            </a>
            <a href="#" class="card-keunggulan" style="gap: 8px; margin-bottom: 90px;">
                <img src="assets/images/3D money bag.png" class="keunggulan-img">
                <p>Tanpa DP</p>
            </a>
            <a href="#" class="card-keunggulan">
                <img src="assets/images/EDIT.png" class="keunggulan-img" style="width: 70px; height: 53px;">
                <p>Free design</p>
            </a>

        </div>
    </section>
    <!-- Bottom navbar -->
    <ul class="nav">


        <li class="indicator-container">
            <span class="navbar-indicator"></span>
            <a href="#" class="nav-item-active">
                <i class='bx bxs-home-alt-2 icon'></i>
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
            <a href="profile.php"><i class='bx bx-user icon'></i>
                <span class="navbar-title">Profile</span>
            </a>
        </li>
    </ul>

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.mySwiper', {
        slidesPerView: 2,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

</html>s