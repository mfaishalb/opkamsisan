<?php
include 'db.php';

$id = intval($_POST['id']);
$flag = trim($_POST['flag']);

$stmt = $conn->prepare("SELECT flag FROM flags WHERE challenge_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($correct_flag);
$stmt->fetch();
$stmt->close();

if ($flag === $correct_flag) {
  echo "✅ Flag benar!";
} else {
  echo "❌ Salah.";
}
?>
