<?php
// Ambil nama file gambar dari URL. Contoh: lihat-poster.php?img=poster_antara.jpg
$nama_file_gambar = $_GET['img'] ?? 'default.jpg';

// Keamanan sederhana untuk mencegah akses ke folder lain
if (strpos($nama_file_gambar, '..') !== false || strpos($nama_file_gambar, '/') !== false) {
    die('Akses tidak diizinkan.');
}

$path_lengkap = 'poster-images/' . $nama_file_gambar;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Poster - LetsForensic</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        .viewer-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            min-height: 80vh;
        }
        .viewer-image {
            max-width: 100%;
            max-height: 70vh;
            border-radius: 8px;
            border: 2px solid var(--lightest-navy);
            margin-bottom: 30px;
            background-color: var(--light-navy);
        }
    </style>
</head>
<body class="page-background">
    <canvas id="matrix-canvas"></canvas>
    <nav>
        <div class="container">
            <a href="index.php" class="logo">LetsForensic🛡️</a>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="karya.php">Karya</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="kuis.php" class="button-nav">Mulai Kuis</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="viewer-container">
            <?php if (file_exists($path_lengkap)): ?>
                <img src="<?php echo htmlspecialchars($path_lengkap); ?>" alt="<?php echo htmlspecialchars($nama_file_gambar); ?>" class="viewer-image">
            <?php else: ?>
                <p style="color:red;">Maaf, gambar tidak ditemukan.</p>
            <?php endif; ?>
            
            <a href="karya.php" class="tombol-kembali" style="border-width: 2px;">&larr; Kembali ke Galeri Karya</a>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>© <?php echo date("Y"); ?> LetsForensic. Sebuah Inisiatif untuk Keamanan Digital.</p>
        </div>
    </footer>
    <script src="matrix.js"></script>
</body>
</html>