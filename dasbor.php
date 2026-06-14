<?php 
session_start();
// Proteksi halaman dasbor
if($_SESSION['status'] != "login"){
    header("location:login.php?pesan=belum_login");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dasbor Admin - E-Lapor</title>
</head>
<body>
    <h2>Selamat Datang di Dasbor Admin E-Lapor</h2>
    <a href="logout.php">Logout</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Pelapor</th>
            <th>Isi Laporan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM laporan ORDER BY id DESC");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama_pelapor']; ?></td>
            <td><?php echo $d['isi_laporan']; ?></td>
            <td><?php echo $d['status']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>">Ubah Status</a> | 
                <a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>