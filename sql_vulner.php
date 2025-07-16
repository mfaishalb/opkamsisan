<?php
$id = $_GET['id'];
$conn = new mysqli('localhost', 'user', 'pass', 'db');
$query = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($query);
?>
