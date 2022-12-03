<?php
include 'database.php';
//delete from db schema public table user by selected id
$sql = "DELETE FROM admin WHERE id = '".$_GET['id']."'";
$result = mysqli_query($db, $sql);
//if success redirect to index.php with header
if ($result) {
    //admin berhasil dihapus alert if success
    echo "<script>alert('Admin berhasil dihapus'); window.location.href='admin.php';</script>";
} else {
    //admin gagal dihapus alert if failed
    echo "<script>alert('Admin gagal dihapus'); window.location.href='admin.php';</script>";
}

    