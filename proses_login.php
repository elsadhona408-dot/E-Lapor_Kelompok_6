<?php
session_start(); // Memulai session sesuai instruksi modul tugas

// Menangkap data yang dikirim dari form login.php
$username_input = $_POST['username'];
$password_input = $_POST['password'];

// Cek apakah username dan password benar
if ($username_input == "admin" && $password_input == "admin") {
    // Jika benar, set session status login
    $_SESSION['status'] = "login";
    header("location:dasbor.php");
} else {
    // Jika salah, balikkan ke halaman login dengan pesan gagal
    header("location:login.php?pesan=gagal");
}
?>