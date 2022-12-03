<?php

include 'database.php';
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda harus login terlebih dahulu'); window.location.href='login.php';</script>";
    exit();
}

//get judul and gdrive from post
$judul = $_POST['judul'];
$gdrive = $_POST['gdrive'];

$foto = $_FILES['foto']['name'];
$ekstensi_diperbolehkan	= array('png','jpg','jpeg','heic','heif');
$nama = $_FILES['foto']['name'];
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['foto']['size'];
$file_tmp = $_FILES['foto']['tmp_name'];
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1000000){
        $sql = mysqli_query($db, "INSERT INTO portofolio (judul, gdrive, foto) VALUES ('$judul', '$gdrive', '$foto')");
        if($sql){
            move_uploaded_file($file_tmp, 'assets/portofolio/'.$nama); 
            //if file uploaded direct to index.php?page=tambah&status=success
            echo "<script>alert('data berhasil ditambahkan'); window.location.href='portofolio.php';</script>";
        }else{
            echo "<script>alert('data gagal ditambahkan'); window.location.href='tambah_portofolio.php';</script>";
        }
    }else{
        echo "<script>alert('ukuran file terlalu besar'); window.location.href='tambah_portofolio.php';</script>";
    }
}else{
    echo "<script>alert('ekstensi file tidak diperbolehkan'); window.location.href='tambah_portofolio.php';</script>";
}