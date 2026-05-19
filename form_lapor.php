<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Lapor - Buat Pengaduan</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; margin: 0; padding: 0; }
        .navbar { background-color: #198754; padding: 15px; color: white; display: flex; justify-content: space-between; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .navbar .brand { font-weight: bold; font-size: 1.2rem; display: flex; align-items: center; }
        .navbar a { color: white; text-decoration: none; font-weight: bold; margin-left: 15px; }
        .container { max-width: 700px; margin: 40px auto; padding: 0 20px; }
        .card { background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); overflow: hidden; border: 1px solid #e3e6f0; }
        .card-header { background-color: #198754; color: white; padding: 15px 20px; font-size: 1.25rem; font-weight: bold; }
        .card-body { padding: 25px; }
        .mb-3 { margin-bottom: 20px; }
        .form-label { display: block; margin-bottom: 8px; font-weight: 600; color: #333; }
        .form-control { width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 6px; box-sizing: border-box; font-size: 1rem; }
        .form-control:focus { border-color: #198754; outline: none; box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.2); }
        .form-text { font-size: 0.85rem; color: #6c757d; margin-top: 5px; }
        .d-grid { display: grid; }
        .btn-success { width: 100%; background-color: #198754; color: white; border: none; padding: 12px; font-size: 1.1rem; font-weight: bold; border-radius: 6px; cursor: pointer; transition: background 0.2s; }
        .btn-success:hover { background-color: #157347; }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="brand">📢 E-LAPOR</div>
        <div>
            <a href="index.php">Home</a>
            <a href="form_lapor.php" style="border-bottom: 2px solid white; padding-bottom: 5px;">Buat Laporan</a>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-header">
                📝 Form Pengaduan Masyarakat
            </div>
            <div class="card-body">
                
                <form id="formPengaduan" action="proses_lapor.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label for="nama_pelapor" class="form-label">Nama Pelapor</label>
                        <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" placeholder="Masukkan nama lengkap Anda">
                    </div>

                    <div class="mb-3">
                        <label for="isi_laporan" class="form-label">Isi Laporan / Pengaduan</label>
                        <textarea class="form-control" id="isi_laporan" name="isi_laporan" rows="5" placeholder="Ceritakan detail kronologi kejadian atau keluhan Anda..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="foto_bukti" class="form-label">Lampirkan Foto Bukti</label>
                        <input class="form-control" type="file" id="foto_bukti" name="foto_bukti" accept="image/*">
                        <div class="form-text">Format file harus berupa gambar (JPG, JPEG, PNG).</div>
                    </div>

                    <div class="d-grid" style="gap: 10px;">
    <button type="submit" class="btn btn-success">
        🚀 Kirim Laporan
    </button>
    <a href="index.php" style="text-align: center; display: block; padding: 10px; background-color: #6c757d; color: white; text-decoration: none; border-radius: 6px; font-weight: bold;">
        ❌ Batal / Kembali
    </a>
</div>
                </form>

            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>