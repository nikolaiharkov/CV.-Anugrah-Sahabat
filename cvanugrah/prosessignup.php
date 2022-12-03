<?php
//require database.php
include('database.php');

// get username, email, no telepon, alamat, password from post
$username = $_POST['username'];
$email = $_POST['email'];
$no_telepon = $_POST['no_telepon'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];
$ulangpassword = $_POST['ulangpassword'];

// password must be same with ulangpassword
if($password != $ulangpassword){
    echo "<script>alert('Password tidak sama'); window.location.href='signup.php';</script>";
    exit();
}
// password must be more than 6 characters
if(strlen($password) < 6){
    echo "<script>alert('Password harus lebih dari 6 karakter'); window.location.href='signup.php';</script>";
    exit();
}
// no_telepon must be more than 10 characters
if(strlen($no_telepon) < 10){
    echo "<script>alert('No telepon harus lebih dari 10 karakter'); window.location.href='signup.php';</script>";
    exit();
}
// no_telepon must be number
if(!is_numeric($no_telepon)){
    echo "<script>alert('No telepon harus angka'); window.location.href='signup.php';</script>";
    exit();
}
// check if username is already exist
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $db -> query($sql);
if($result -> num_rows > 0){
    echo "<script>alert('Username sudah ada'); window.location.href='signup.php';</script>";
    exit();
}
// check if email is already exist
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $db -> query($sql);
if($result -> num_rows > 0){
    echo "<script>alert('Email sudah ada'); window.location.href='signup.php';</script>";
    exit();
}

// hash password to md5
$password = md5($password);

// insert data to database
$sql = "INSERT INTO users (username, email, no_telepon, alamat, password) VALUES ('$username', '$email', '$no_telepon', '$alamat', '$password')";
$result = $db -> query($sql);
if($result){
    echo "<script>alert('Akun anda sudah dibuat, silahkan login'); window.location.href='login.php';</script>";
    exit();
}else{
    echo "<script>alert('Akun anda gagal dibuat'); window.location.href='signup.php';</script>";
    exit();
}
?>