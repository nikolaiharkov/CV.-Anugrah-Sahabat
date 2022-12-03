<?php
include('database.php');
// get username and password from post
$username = $_POST['username'];
$password = $_POST['password'];
// hash password to md5
$password = md5($password);
// check if username and password is correct
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($db, $sql);
if(mysqli_num_rows($result) > 0){
    // if correct, set session and redirect to home page and session will be set
    session_start();
    $_SESSION['username'] = $username;
    // alert login berhasil and redirect to home page
    echo "<script>alert('Login berhasil'); window.location.href='home.php';</script>";
    exit();
}else{
    // if incorrect, redirect to login page alert login gagal
    echo "<script>alert('Login gagal'); window.location.href='login.php';</script>";
    exit();
}
