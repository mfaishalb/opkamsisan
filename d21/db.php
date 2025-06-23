<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sandbox";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("DB error: " . $conn->connect_error);
}
?>
