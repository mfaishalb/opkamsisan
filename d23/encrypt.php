<?php
include 'koneksi.php';

// 1. Ambil input user
$nama = $_POST['nama_pengirim'];
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

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Enkripsi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>✅ Berhasil</h1>
        <p>Data berhasil <strong>terenkripsi</strong> dan disimpan ke dalam database.</p>

        <div class="action-buttons">
            <a href="index.php">← Enkripsi Lagi</a>
            <a href="decrypt_all.php">🔓 Lihat & Dekripsi Pesan</a>
        </div>
    </div>
</body>
</html>
