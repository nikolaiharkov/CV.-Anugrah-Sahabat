<?php
include 'database.php';
//delete from db schema public table user by selected id
$sql = "DELETE FROM portofolio WHERE id = '".$_GET['id']."'";
$result = mysqli_query($db, $sql);
//if success redirect to index.php with header
if ($result) {
    //admin berhasil dihapus alert if success
    echo "<script>alert('portofolio berhasil dihapus'); window.location.href='portofolio.php';</script>";
} else {
    //admin gagal dihapus alert if failed
    echo "<script>alert('portofolio gagal dihapus'); window.location.href='portofolio.php';</script>";
}