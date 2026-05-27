<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pelapor = mysqli_real_escape_string($koneksi, $_POST['nama_pelapor']);
    $isi_laporan  = mysqli_real_escape_string($koneksi, $_POST['isi_laporan']);
    $status       = "Menunggu";

    $query = "INSERT INTO laporan (nama_pelapor, isi_laporan, status) VALUES ('$nama_pelapor', '$isi_laporan', '$status')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Selamat, Operasi CREATE Anda berhasil!');
                window.location.href = 'form_lapor.php';
              </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
mysqli_close($koneksi);
?>