// Tangkap elemen form pengaduan
const form = document.getElementById('formPengaduan');
const namaInput = document.getElementById('nama_pelapor');

// Dengarkan event submit pada form
form.addEventListener('submit', function(event) {
    
    // 1. Validasi: Mencegah data kosong pada input Nama Pelapor
    if (namaInput.value.trim() === "") {
        alert("Maaf, Nama Pelapor tidak boleh kosong! Mohon diisi terlebih dahulu.");
        event.preventDefault(); // Cegah form dikirim ke backend
        return false;
    }

    // 2. Kotak dialog konfirmasi jika nama sudah diisi
    const yakin = confirm("Apakah Anda yakin data laporan sudah benar?");
    
    if (!yakin) {
        event.preventDefault(); // Jika klik 'Cancel', batalkan pengiriman form
    }
});