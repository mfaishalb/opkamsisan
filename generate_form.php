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
    <h1>Generate RSA Keys</h1>
    <p>Pilih ukuran kunci RSA lalu buat pasangan kunci.</p>
    <form class="card stack" action="generate_keys.php" method="post">
      <label for="size">Ukuran Kunci</label>
      <select id="size" name="size">
        <option value="1024">1024-bit</option>
        <option value="2048" selected>2048-bit</option>
        <option value="4096">4096-bit</option>
      </select>
      <button type="submit">Generate</button>
    </form>
  </div>
</div>
<footer class="app-footer">© 2025 Sandi Data Mini • Desain diperbarui</footer>
</body>
</html>
