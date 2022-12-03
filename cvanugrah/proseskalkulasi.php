<?php
include('database.php');
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda harus login terlebih dahulu'); window.location.href='login.php';</script>";
    exit();
}

//get ltanah1 & ltanah2 from post
$ltanah1 = $_POST['ltanah1'];
$ltanah2 = $_POST['ltanah2'];
//get lbangun1 & lbangun2 from post
$lbangun1 = $_POST['lbangun1'];
$lbangun2 = $_POST['lbangun2'];

//get jumlantai from post
$jumlantai = $_POST['jumlantai'];

//get username from session
$username = $_SESSION['username'];

// calculate luastanah = ltanah1 * ltanah2
$luastanah = $ltanah1 * $ltanah2;
// calculate luasbangunan = lbangun1 * lbangun2
$luasbangunan = $lbangun1 * $lbangun2;

// calculate totalbiaya = luasbangunan * jumlantai
$totalbangun = $luasbangunan * $jumlantai;

//if luasbangunan < 100, calculate totalbiaya = totalbangun * 4500000, if luasbangunan > 100, calculate totalbiaya = totalbangun * 4000000
if($luasbangunan < 100){
    $totalbiaya = $totalbangun * 4500000;
}else{
    $totalbiaya = $totalbangun * 4000000;
}

//get username from session
$username = $_SESSION['username'];
//get no_telepon and alamat where username in table users
$sql = "SELECT no_telepon, alamat FROM users WHERE username = '$username'";
//no_telepon and alamat will be stored in $result
$result = $db -> query($sql);
//fetch $result to $row
$row = $result -> fetch_assoc();
//get no_telepon and alamat from $row
$no_telepon = $row['no_telepon'];
$alamat = $row['alamat'];

//insert data to database
//insert username, luastanah, luasbangunan, jumlantai, totalbiaya to database
$sql = "INSERT INTO kalkulasi (username, luastanah, luasbangunan, jumlantai, totalbiaya) VALUES ('$username', '$luastanah', '$luasbangunan', '$jumlantai', '$totalbiaya')";
$result = mysqli_query($db, $sql);
//if success, redirect to cetak_pdf.php with header and send $totalbiaya to cetak_pdf.php by url
if($result){
    // send totalbiaya, luasbangunan, jumlantai, no_telepon, alamat to cetak_pdf.php
    header("Location: cetak_pdf.php?totalbiaya=$totalbiaya&luasbangunan=$luasbangunan&jumlantai=$jumlantai&no_telepon=$no_telepon&alamat=$alamat");
    exit();
}else{
    echo "<script>alert('Data gagal disimpan'); window.location.href='form_bangun_baru.php';</script>";
    exit();
}