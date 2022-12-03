<?php
//require database.php
include('database.php');
session_start();

//if sessions is not set, redirect to login page, if set go to home page
if(!isset($_SESSION['username'])){
    header('Location: login.php');
    exit();
}else{
    header('Location: home.php');
    exit();
}