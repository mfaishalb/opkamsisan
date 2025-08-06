<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enkripsi Pesan - Sandi Data Mini</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Sandi Data Mini</h1>
        <h2>Enkripsi Pesan</h2>
        <form action="encrypt.php" method="post">
            <label for="nama_pengirim">Nama Pengirim</label>
            <input type="text" name="nama_pengirim" required>

            <label for="created_at">Tanggal</label>
            <input type="date" name="created_at" required>

            <label for="pesan">Pesan</label>
            <textarea name="pesan" required></textarea>

            <button type="submit">Enkripsi</button>
        </form>
        <p><a href="decrypt_all.php">🔓 Lihat & Dekripsi Data</a></p>
    </div>
</body>
<script>
    const form = document.querySelector("form");
    form.addEventListener("submit", () => {
        alert("Pesan sedang dienkripsi. Jangan tutup halaman.");
    });
</script>
</html>
