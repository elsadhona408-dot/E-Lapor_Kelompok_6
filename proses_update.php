<?php
session_start();
if($_SESSION['status'] != "login"){
    header("location:login.php");
    exit();
}
include 'koneksi.php';

$id = $_POST['id'];
$status_baru = $_POST['status'];

mysqli_query($koneksi, "UPDATE laporan SET status='$status_baru' WHERE id='$id'");
header("location:dasbor.php");
?>