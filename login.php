<!DOCTYPE html>
<html lang="id">
<head>
    <title>Login Admin - E-Lapor</title>
</head>
<body>
    <h2>Login Admin E-Lapor</h2>

    <!-- Pesan Notifikasi Jika Gagal Login atau Belum Login -->
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "<p style='color:red;'>Login gagal! Username atau password salah.</p>";
        } else if($_GET['pesan'] == "belum_login"){
            echo "<p style='color:orange;'>Anda harus login terlebih dahulu untuk mengakses dasbor!</p>";
        }
    }
    ?>

    <form action="proses_login.php" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>