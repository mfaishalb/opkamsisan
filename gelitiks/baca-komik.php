<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komik Keamanan Siber - LetsForensic</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Style tambahan khusus untuk halaman komik gambar */
        .comic-image-container img {
            width: 100%;
            max-width: 800px; /* Batasi lebar maksimal gambar agar tidak terlalu besar di layar lebar */
            display: block;
            margin: 0 auto 10px auto; /* Memberi jarak antar halaman komik */
            border: 1px solid var(--lightest-navy);
            border-radius: 4px;
        }
    </style>
    </head>
<body>
    <canvas id="matrix-canvas"></canvas>
    <nav>
        </nav>
    <main>
        <article class="artikel-wrapper">
            <div class="container-artikel">
                <header class="artikel-header">
                    <h1>Komik: Tipu - Tipu Digital</h1>
                </header>
                <section class="artikel-konten comic-image-container">
                   <?php
    // GANTI ANGKA 13 DENGAN JUMLAH TOTAL GAMBAR KOMIK ANDA
    $jumlah_halaman = 36; 

    for ($i = 1; $i <= $jumlah_halaman; $i++) {
        // --- INI BAGIAN YANG DIPERBAIKI ---
        // Membuat format nomor 4 digit (misal: 1 menjadi "0001")
        $nomor_halaman_format = sprintf("%04d", $i);
        
        // Menggabungkan nama file sesuai dengan nama file Anda yang sebenarnya
        $path_gambar = 'komik-images/BESTI-KOMUNIKA-EDISI-48_page-' . $nomor_halaman_format . '.jpg';
        // ------------------------------------

        if (file_exists($path_gambar)) {
            echo '<img src="' . htmlspecialchars($path_gambar) . '" alt="Komik Halaman ' . $i . '">';
        } else {
            // Opsional: Menampilkan pesan jika ada gambar yang hilang di tengah
            // echo '<p style="color:red;">File tidak ditemukan: ' . $path_gambar . '</p>';
        }
    }
?>
                </section>
                <div class="artikel-navigasi-bawah" style="margin-top: 40px;">
                    <a href="index.php#literasi-siber" class="tombol-kembali">&larr; Kembali ke Pojok Literasi</a>
                </div>
            </div>
        </article>
    </main>
    <footer>
        </footer>
    <script src="matrix.js"></script>
</body>
</html>