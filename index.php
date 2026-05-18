<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Lapor - Sistem Pengaduan Masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="index.php">
                <i class="bi bi-megaphone-fill me-2"></i> E-LAPOR
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="form_lapor.php">Buat Laporan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <div class="p-5 text-center bg-white rounded-4 shadow-sm border">
            <i class="bi bi-chat-square-text-fill text-success display-1 mb-3"></i>
            <h1 class="display-5 fw-bold text-dark">Layanan Pengaduan Masyarakat Online</h1>
            <p class="col-lg-8 mx-auto lead text-muted">
                Sampaikan laporan, keluhan, atau aspirasi Anda secara langsung dan cepat kepada instansi berwenang melalui sistem e-Lapor.
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-4">
                <a href="form_lapor.php" class="btn btn-success btn-lg px-4 gap-3 fw-semibold">
                    <i class="bi bi-pencil-square me-2"></i>Laporkan Sekarang!
                </a>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold m-0 text-dark">Daftar Laporan Terbaru</h3>
            <span class="badge bg-success px-3 py-2 rounded-pill">Update Realtime</span>
        </div>
        
        <div class="row">
            
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-3">
                    <div class="card-header bg-transparent border-0 pt-4 px-4 d-flex justify-content-between align-items-center">
                        <span class="badge bg-danger px-2 py-1">Infrastruktur</span>
                        <span class="badge bg-warning text-dark px-2 py-1"><i class="bi bi-clock-history me-1"></i>Proses</span>
                    </div>
                    <div class="card-body px-4 pb-4">
                        <h5 class="card-title fw-bold text-dark mt-2">Jalan Rusak Berlubang di Jl. G. Obos</h5>
                        <h6 class="card-subtitle mb-3 text-muted small">
                            <i class="bi bi-person-circle me-1"></i> Pelapor: Anonim | <i class="bi bi-calendar3 me-1"></i> 19 Mei 2026
                        </h6>
                        <p class="card-text text-secondary">
                            Terdapat lubang besar di tengah jalan raya yang sangat membahayakan pengendara motor, terutama saat malam hari karena minimnya penerangan. Mohon segera diperbaiki.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-3">
                    <div class="card-header bg-transparent border-0 pt-4 px-4 d-flex justify-content-between align-items-center">
                        <span class="badge bg-primary px-2 py-1">Fasilitas Umum</span>
                        <span class="badge bg-success px-2 py-1"><i class="bi bi-check-circle me-1"></i>Selesai</span>
                    </div>
                    <div class="card-body px-4 pb-4">
                        <h5 class="card-title fw-bold text-dark mt-2">Lampu Penerangan Jalan Padam</h5>
                        <h6 class="card-subtitle mb-3 text-muted small">
                            <i class="bi bi-person-circle me-1"></i> Pelapor: Budi | <i class="bi bi-calendar3 me-1"></i> 18 Mei 2026
                        </h6>
                        <p class="card-text text-secondary">
                            Fasilitas lampu penerangan jalan umum di sekitar area pemukiman warga padam sejak tiga hari yang lalu, membuat lingkungan sekitar menjadi rawan tindakan kriminal.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="bg-white border-top py-3 text-center text-muted mt-auto">
        <div class="container">
            <small>&copy; 2026 Kelompok 6 - Teknologi Web STMIK Palangkaraya</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>