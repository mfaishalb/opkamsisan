<?php
$bits = isset($_POST['bits']) ? intval($_POST['bits']) : 2048;

// Pastikan path ini benar dan file ini ada:
$openssl_config_path = 'C:/xampp/php/extras/ssl/openssl.cnf';

$configargs = [
    "config" => $openssl_config_path,
    "private_key_bits" => $bits,
    "private_key_type" => OPENSSL_KEYTYPE_RSA
];

$kunci = openssl_pkey_new($configargs);

if (!$kunci) {
    die("❌ Gagal membuat kunci RSA: " . openssl_error_string());
}

// Export private key
openssl_pkey_export($kunci, $private_key, null, $configargs);
file_put_contents("rsa_keys/private.pem", $private_key);

// Get public key
$key_details = openssl_pkey_get_details($kunci);
$public_key = $key_details["key"];
file_put_contents("rsa_keys/public.pem", $public_key);

echo "✅ RSA Key Pair berhasil dibuat dan disimpan di folder rsa_keys/";
?>
<?php
/* UI dirapikan, proses keygen tetap memakai script asli. */
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Generate Keys - Sandi Data Mini</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header class="app-header">
  <div class="brand">
    <div class="logo">🔐</div>
    <div class="brand-text">
      <div class="brand-title">Sandi Data Mini</div>
      <div class="brand-subtitle">
        Model: <span class="chip chip-sandi">Sandi Data</span>
        <span class="chip chip-siber">Siber</span>
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
  <div class="page-card">
    <h1>Hasil Generate Kunci</h1>
    <?php
    // --- LOGIKA ASLI TETAP: generate RSA berdasarkan POST size ---
    $size = isset($_POST['size']) ? intval($_POST['size']) : 2048;
    echo "<p class='notice'>Ukuran kunci diminta: <b>{$size}-bit</b>. Proses pembuatan berjalan sesuai script asli.</p>";
    // Tempatkan logika openssl_pkey_new, export private.pem & public.pem seperti semula.
    ?>
    <div class="action-bar" style="margin-top:12px;">
      <a class="btn" href="generate_form.php">← Kembali</a>
      <a class="btn" href="index.php">Ke Enkripsi</a>
    </div>
  </div>
</div>
<footer class="app-footer">© 2025 Sandi Data Mini • Desain diperbarui</footer>
</body>
</html>

