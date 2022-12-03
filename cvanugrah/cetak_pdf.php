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
    <title>Cetak pdf</title>
    <link rel="stylesheet" href="assets/style/index.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="card-cetak bd-container">
        <div class="card-cetak-container">
            <div class="card-cetak-info">
                <img src="assets/images/logo1.jpg" class="cetak-logo">
                <p>Estimasi perhitungan untuk jenis sesuai permintaan anda sebesar</p>
                <?php
                //get totalbiaya from url
                $totalbiaya = $_GET['totalbiaya'];
                //show totalbiaya with rupiah format
                echo "<h3>Rp. " . number_format($totalbiaya, 0, ',', '.') . "</h3>";
                ?>
            </div>
            <img src="assets/images/26.png" class="cetak-img">
        </div>
    </section>
    <div class="bd-container">
        <?php
        // get totalbiaya, luasbangunan, jumlantai from url
        $totalbiaya = $_GET['totalbiaya'];
        $luasbangunan = $_GET['luasbangunan'];
        $jumlantai = $_GET['jumlantai'];
        //get no_telepon, alamat from url
        $no_telepon = $_GET['no_telepon'];
        $alamat = $_GET['alamat'];
        //get username from session
        $username = $_SESSION['username'];
        // create button to /invoice/invoice.php with totalbiaya, luasbangunan, jumlantai, no_telepon, alamat, username
        echo "<a href='invoice/invoice.php?totalbiaya=$totalbiaya&luasbangunan=$luasbangunan&jumlantai=$jumlantai&no_telepon=$no_telepon&alamat=$alamat&username=$username' class='btn btn-secondary'>Cetak PDF</a>";
        ?>
    </div>
    <div class="deskripsi bd-container" style="margin-top: 24px;">
    
        <h2>Spesifikasi Material:</h2>
        <p>1. Besi. Kombinasi besi 16 ulir, 13 ulir dan 8 polos.<br>
            2. Pasir dan split, pilihan lokal<br>
            3. Semen. Padang, Jakarta. Setara<br>
            4. Dinding Hebel, tebal 10. AAC type.<br>
            5. Plafon PVC.<br>
            6. Cat . Dulux, Mowilex, Jotun. Setara.<br>
            7. Keramik 60*60. Ex KIA, Asia Tile. Setara.<br>
            8. Kusen Alumunium Alexindo. Kaca 5mm<br>
            9. Sanitair. Ex. Toto, American Standard.</p><br>
    </div>
    <div class=" cetak-btns">
        <div class="cetak-btn cetak-btn-secondary bd-container">
            <a href="form_bangun_baru.php">Kalkulasi Lagi</a>
        </div>
        <a href="https://api.whatsapp.com/send?phone=6281338870348&text=Halo%20Cv.%20Anugrah%20Sahahat,%20saya%20memiliki%20pertanyaan." class="btn-primary bd-container"><i class='bx bxl-whatsapp icon-primary'></i>Konsultasi Desain Gratis</a>
            
      
    </div>

</body>

</html>