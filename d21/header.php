<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  </head>
<body>
  <canvas id="background-canvas"></canvas>
  <div class="navbar">
    <div class="nav-container">
      <a href="index.php" class="nav-brand">CTF Edukasi</a>
      <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="challenges.php">Tantangan</a>
        <a href="scoreboard.php">Scoreboard</a>
        <?php if (isset($_SESSION['user_id'])): ?>
          <a href="logout.php">Logout (<?php echo htmlspecialchars($_SESSION['username']); ?>)</a>
        <?php else: ?>
          <a href="login.php">Login</a>
          <a href="register.php">Register</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="main-container"></div>