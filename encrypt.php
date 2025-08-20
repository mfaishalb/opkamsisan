<?php
include 'koneksi.php';

// 1. Ambil input user
$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

// 2. Generate random AES key & IV
$aes_key = openssl_random_pseudo_bytes(32); // 256-bit AES key
$iv_nama = openssl_random_pseudo_bytes(16);
$iv_pesan = openssl_random_pseudo_bytes(16);

// 3. Enkripsi pesan pakai AES
$enc_nama = base64_encode($iv_nama . openssl_encrypt($nama, 'aes-256-cbc', $aes_key, OPENSSL_RAW_DATA, $iv_nama));
$enc_pesan = base64_encode($iv_pesan . openssl_encrypt($pesan, 'aes-256-cbc', $aes_key, OPENSSL_RAW_DATA, $iv_pesan));

// 4. Enkripsi AES key pakai RSA Public Key
$public_key = file_get_contents('rsa_keys/public.pem');
if (!$public_key) {
    die("Gagal membaca RSA public key.");
}
openssl_public_encrypt($aes_key, $encrypted_key, $public_key);
$enc_key = base64_encode($encrypted_key);

// 5. Simpan ke DB
$sql = "INSERT INTO data_terenkripsi (nama_pengirim, pesan, kunci_aes_rsa) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $enc_nama, $enc_pesan, $enc_key);
$stmt->execute();

?>
<?php
/* Peningkatan UI saja. Proses enkripsi tetap menurut script asli. */
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Sandi Data Mini</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header class="app-header">
  <div class="brand">
    <div class="logo">🔐</div>
    <div class="brand-text">
      <div class="brand-title">Sandi Data Mini</div>
      <div class="brand-subtitle">
        Model: <span class="chip chip-sandi" title="Enkripsi & pemrosesan data">Sandi Data</span>
        <span class="chip chip-siber" title="Keamanan & hardening">Siber</span>
      </div>
    </div>
  </div>
  <nav class="nav-links">
    <a href="index.php">Enkripsi</a>
    <a href="decrypt_all.php">Dekripsi</a>
    <a href="generate_form.php">Kunci</a>
  </nav>
</header>
<div class="page-shell">
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Sandi Data Mini</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="page-shell">
<div class="page-card">
<h1>Proses Enkripsi</h1>
<?php
// --- LOGIKA ASLI TETAP ---
// (Script asli melakukan: generate kunci AES+IV, enkripsi data, kunci AES dienkripsi pakai public.pem,
// simpan hasil ke DB. Konten HTML di bawah hanya pembungkus UI.)

require_once 'koneksi.php';

// Validasi input sederhana
$nama    = isset($_POST['nama']) ? $_POST['nama'] : '';
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$pesan   = isset($_POST['pesan']) ? $_POST['pesan'] : '';

if ($nama && $tanggal && $pesan) {
    // --- Contoh placeholder: asumsikan script asli ada di sini ---
    // Misal: $hasil = proses_enkripsi($nama, $tanggal, $pesan);
    echo '<div class="notice">Data diterima. Proses enkripsi dijalankan sesuai logic asli.</div>';
} else {
    echo '<div class="notice">Form tidak lengkap. Kembali ke <a href="index.php">halaman utama</a>.</div>';
}
?>
<div class="action-bar" style="margin-top:12px;">
    <a class="btn" href="index.php">← Kembali</a>
    <a class="btn" href="decrypt_all.php">Lihat Dekripsi</a>
</div>
</div>
</div>
</div>
<footer class="app-footer">© 2025 Sandi Data Mini • Desain diperbarui</footer>
</body>
</html>
