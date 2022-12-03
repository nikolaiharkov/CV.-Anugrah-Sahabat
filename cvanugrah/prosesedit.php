<?php
include('database.php');

//get username, passlama, passbaru, passbaruulang from post
$username = $_POST['username'];
$passbaru = $_POST['passbaru'];
$passbaruulang = $_POST['passbaruulang'];

//update password
//check if passbaru and passbaruulang is match

if($passbaru != $passbaruulang){
    echo "<script>alert('Password tidak sama'); window.location.href='signup.php';</script>";
    exit();
}
if(strlen($passbaru) < 6){
    echo "<script>alert('Password harus lebih dari 6 karakter'); window.location.href='edit_profile.php';</script>";
    exit();
}



//check if passbaru is more than 6 characters


//hash password to md5
$passbaru = md5($passbaru);
//update password
$sql = "UPDATE users SET password = '$passbaru' WHERE username = '$username'";
$result = $db -> query($sql);
if($result){
    echo "<script>alert('Password berhasil diubah'); window.location.href='home.php';</script>";
    exit();
}else{
    echo "<script>alert('Password gagal diubah'); window.location.href='edit_profile.php';</script>";
    exit();
}
