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
