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
    <title>Kalkulasi Bangunan Anda</title>
    <link rel="stylesheet" href="assets/style/index.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="bd-container">
        <a href="home.php" class=" back-btn">
            <i class='bx bx-arrow-back'></i>
            <p>Ayo Hitung Estimasi Biaya Anda</p>
        </a>
    </div>

    <section class="bd-container">
        <div style="margin-top: 32px">
            <form action="proseskalkulasi.php" method="post">
                <div class="group-form">
                    <label>Luas Tanah</label>
                    <div class="double-form">
                        <input type="number" class="input" name="ltanah1" required>
                        <p>X</p>
                        <input type="number" class="input" name="ltanah2" required>
                    </div>
                </div>
                <div class="group-form mt-16">
                    <label>Luas Bangunan</label>
                    <div class="double-form">
                        <input type="number" class="input" name="lbangun1" required>
                        <p>X</p>
                        <input type="number" class="input" name="lbangun2" required>
                    </div>
                </div>
                </div>
                <div class="form-group mt-16">
                    <label>Jumlah Lantai</label>
                    <input type="number" class="input" placeholder="Masukan jumlah lantai" id="id_password" value="1" name="jumlantai">
                </div>
                <button type="submit" class="btn-primary mt-32"><i class='bx bx-calculator icon-primary'></i>Hitung biaya</button>

        </div>
            </form>
        </div>
    </section>


</body>

</html>