<?php
include 'database.php';
//delete from db schema public table user by selected id
$sql = "DELETE FROM users WHERE id = '".$_GET['id']."'";
$result = mysqli_query($db, $sql);
//if success redirect to index.php with header
if ($result) {
    //admin berhasil dihapus alert if success
    echo "<script>alert('Member berhasil dihapus'); window.location.href='member.php';</script>";
} else {
    //admin gagal dihapus alert if failed
    echo "<script>alert('Member gagal dihapus'); window.location.href='member.php';</script>";
}

    