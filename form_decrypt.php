<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Form Dekripsi - Sandi Data Mini</title>
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
    <h1>Form Dekripsi</h1>
    <p>Masukkan parameter dekripsi (sesuai implementasi backend kamu).</p>
    <form class="card stack" action="decrypt.php" method="post">
      <label for="key">Kunci</label>
      <input type="text" id="key" name="key" required>
      <button type="submit">Dekripsi</button>
    </form>
  </div>
</div>
<footer class="app-footer">© 2025 Sandi Data Mini • Desain diperbarui</footer>
</body>
</html>
