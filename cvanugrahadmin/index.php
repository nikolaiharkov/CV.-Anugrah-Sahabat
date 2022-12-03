<?php
//include database.php
include 'database.php';
session_start();
//check if user is logged in, if not go to login page, if yes go to home.php
if(!isset($_SESSION['username'])){
    header('location:login.php');
}else{
    header('location:home.php');
}
