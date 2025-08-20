<?php
/* File ini sudah ada peningkatan UI tanpa mengubah logika form/enkripsi. */
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Sandi Data Mini</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header class="app-header">
  <div class="brand">
    <div class="logo">🔐</div>
    <div class="brand-text">
      <div class="brand-title">Sandi Data Mini</div>
      <div class="brand-subtitle">
        Model: <span class="chip chip-sandi" title="Enkripsi & pemrosesan data">Sandi Data</span>
        <span class="chip chip-siber" title="Keamanan & hardening">Siber</span>
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
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Sandi Data Mini</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="page-shell">
    <div class="page-card">
        <h1>Enkripsi Data</h1>
        <p>Masukkan data Anda. Sistem akan melakukan enkripsi hibrida (AES + RSA) tanpa mengubah proses backend.</p>
        <form class="card stack" action="encrypt.php" method="post">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>

            <label for="tanggal">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <label for="pesan">Pesan</label>
            <textarea id="pesan" name="pesan" rows="4" required></textarea>

            <div class="action-bar">
                <button type="submit">Enkripsi & Simpan</button>
                <a class="btn" href="decrypt_all.php">Lihat / Dekripsi</a>
            </div>
        </form>
        <div class="notice" style="margin-top:12px;">
            Kunci publik RSA harus tersedia agar enkripsi kunci AES berjalan.
        </div>
    </div>
</div>
</div>
<footer class="app-footer">© 2025 Sandi Data Mini • Desain diperbarui</footer>
</body>
</html>
