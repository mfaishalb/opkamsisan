<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dekripsi Data - Sandi Data Mini</title>
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
<div class="page-shell"><!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dekripsi Data - Sandi Data Mini</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container page-card">
        <h1>Sandi Data Mini</h1>
        <h2>Dekripsi Semua Data</h2>

        <form action="decrypt_all.php" method="post" enctype="multipart/form-data">
            <label for="private_key">Unggah Private Key (private.pem)</label>
            <input type="file" name="private_key" id="private_key" accept=".pem" required>
            <button type="submit">Dekripsi</button>
        </form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_FILES['private_key']) && $_FILES['private_key']['error'] === UPLOAD_ERR_OK) {
        $private_key_pem = file_get_contents($_FILES['private_key']['tmp_name']);

        if (!openssl_pkey_get_private($private_key_pem)) {
            echo "<p class='notice'>❌ Private key tidak valid.</p>";
            exit;
        }

        $conn = new mysqli("localhost", "root", "", "sandbox");
        $result = $conn->query("SELECT * FROM data_terenkripsi ORDER BY id DESC");

        if ($result->num_rows > 0) {
            echo "<table class='data-table'>
                    <tr><th>Nama</th><th>Pesan</th><th>Tanggal</th></tr>";

            while ($row = $result->fetch_assoc()) {
                $encrypted_key = base64_decode($row['kunci_aes_rsa']);
                $encrypted_nama = base64_decode($row['nama_pengirim']);
                $encrypted_pesan = base64_decode($row['pesan']);
                $tanggal_plain = $row['created_at'];

                // Dekripsi AES key
                if (!openssl_private_decrypt($encrypted_key, $aes_key, $private_key_pem)) {
                    $nama_plain = $pesan_plain = "❌ Gagal Dekripsi (kunci salah)";
                } else {
                    // Dekripsi nama
                    $iv_nama = substr($encrypted_nama, 0, 16);
                    $cipher_nama = substr($encrypted_nama, 16);
                    $nama_plain = openssl_decrypt($cipher_nama, 'aes-256-cbc', $aes_key, OPENSSL_RAW_DATA, $iv_nama);

                    // Dekripsi pesan
                    $iv_pesan = substr($encrypted_pesan, 0, 16);
                    $cipher_pesan = substr($encrypted_pesan, 16);
                    $pesan_plain = openssl_decrypt($cipher_pesan, 'aes-256-cbc', $aes_key, OPENSSL_RAW_DATA, $iv_pesan);
                }

                echo "<tr><td>$nama_plain</td><td>$pesan_plain</td><td>$tanggal_plain</td></tr>";
            }

            echo "</table>";
        } else {
            echo "<p class='notice'>Tidak ada data terenkripsi.</p>";
        }

        $conn->close();
    } else {
        echo "<p class='notice'>❌ Gagal mengunggah private key.</p>";
    }
}
?>

        <p><a href="index.php">← Kembali ke Enkripsi</a></p>
    </div>
</body>
</html>
