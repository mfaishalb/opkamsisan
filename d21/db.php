<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sandbox";

// Opsi untuk melaporkan error dengan lebih baik
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($host, $user, $pass, $dbname);
    $conn->set_charset("utf8mb4");
} catch (mysqli_sql_exception $e) {
    // die("DB error: " . $e->getMessage()); 
    die("Sistem Database sedang offline. Coba lagi nanti.");
}
?>