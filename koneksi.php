<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sandbox"; // ganti sesuai nama database kamu

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
