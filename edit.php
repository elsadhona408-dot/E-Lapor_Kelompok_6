<?php
session_start();
if($_SESSION['status'] != "login"){
    header("location:login.php");
    exit();
}
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM laporan WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Status Laporan</title>
</head>
<body>
    <h3>Ubah Status Pengaduan</h3>
    <form action="proses_update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        
        <p><strong>Nama Pelapor:</strong> <?php echo $d['nama_pelapor']; ?></p>
        <p><strong>Isi Laporan:</strong> <?php echo $d['isi_laporan']; ?></p>
        
        <label>Status Saat Ini:</label>
        <select name="status">
            <option value="Menunggu" <?php if($d['status'] == 'Menunggu') echo 'selected'; ?>>Menunggu</option>
            <option value="Proses" <?php if($d['status'] == 'Proses') echo 'selected'; ?>>Proses</option>
            <option value="Selesai" <?php if($d['status'] == 'Selesai') echo 'selected'; ?>>Selesai</option>
        </select>
        <br><br>
        <button type="submit">Simpan Perubahan</button>
        <a href="dasbor.php">Batal</a>
    </form>
</body>
</html>