<?php

include 'database.php';
session_start();
//check if user is logged in, if not go to login page, if yes go to home.php
//get username from post
$username = $_POST['username'];
//get password from post
$password = $_POST['password'];

//password to md5
$password = md5($password);

//check username not same from table admin
$check = mysqli_query($db, "SELECT * FROM admin WHERE username = '$username'");
//check if username is exist
if(mysqli_num_rows($check) > 0){
    echo "<script>alert('Username sudah terdaftar'); window.location.href='tambah_admin.php';</script>";
}else{
    //query to insert data to table admin
    $query = "INSERT INTO admin VALUES ('', '$username', '$password')";
    $result = mysqli_query($db, $query);
    //check if query is success
    if($result){
        echo "<script>alert('Data berhasil ditambahkan'); window.location.href='admin.php';</script>";
    }else{
        echo "<script>alert('Data gagal ditambahkan'); window.location.href='tambah_admin.php';</script>";
    }
}