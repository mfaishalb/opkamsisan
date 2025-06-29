<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2FA: Satu Langkah Kecil untuk Keamanan Raksasa - LetsForensic</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Lora:wght@400;700&display=swap" rel="stylesheet">
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
        <article class="artikel-wrapper">
            <div class="container-artikel">
                <header class="artikel-header">
                    <h1>2FA: Satu Langkah Kecil untuk Keamanan Raksasa</h1>
                    <div class="artikel-meta"><span>Waktu baca: 6 menit</span></div>
                    <img src="https://www.malwarebytes.com/wp-content/uploads/sites/2/2018/09/shutterstock_641960737.jpg?w=1000" alt="2FA" class="featured-image">
                </header>
                <section class="artikel-konten">
                    <p class="intro">Jika ada satu hal yang bisa Anda lakukan hari ini untuk meningkatkan keamanan digital Anda secara drastis, itu adalah mengaktifkan Autentikasi Dua Faktor atau Two-Factor Authentication (2FA).</p>
                    <h2>Apa Konsep di Balik 2FA?</h2>
                    <p>2FA menambahkan lapisan keamanan kedua saat Anda login. Selain "sesuatu yang Anda tahu" (password Anda), Anda juga memerlukan "sesuatu yang Anda miliki" (biasanya ponsel Anda). Bayangkan ini seperti kunci pintu rumah Anda. Password adalah kuncinya, sedangkan 2FA adalah gembok tambahan yang kuncinya hanya Anda yang pegang.</p>
                    <p>Bahkan jika peretas berhasil mencuri password Anda, mereka tidak akan bisa masuk ke akun Anda karena mereka tidak memiliki akses ke faktor kedua (ponsel Anda).</p>
                    <h2>Tiga Jenis Populer 2FA (Baik, Lebih Baik, Terbaik)</h2>
                    <ul>
                        <li><strong>Baik - Kode via SMS:</strong> Metode paling umum. Kode unik dikirim ke ponsel Anda. Kelemahannya: rentan terhadap penipuan SIM Swap, di mana penipu mengambil alih nomor ponsel Anda.</li>
                        <li><strong>Lebih Baik - Aplikasi Authenticator:</strong> Menggunakan aplikasi seperti Google Authenticator atau Authy yang menghasilkan kode baru setiap 30 detik. Ini jauh lebih aman karena kode dibuat di perangkat Anda dan tidak dikirim melalui jaringan seluler. **Ini adalah metode yang paling direkomendasikan untuk kebanyakan orang.**</li>
                        <li><strong>Terbaik - Kunci Keamanan Fisik (Hardware Key):</strong> Berbentuk seperti USB (contoh: YubiKey). Anda harus mencolokkan dan menyentuh kunci ini secara fisik untuk login. Ini adalah standar emas keamanan dan hampir mustahil untuk diretas dari jarak jauh.</li>
                    </ul>
                    <h2>Langkah Aksi Anda Hari Ini</h2>
                    <p>Berhentilah membaca sejenak. Buka pengaturan keamanan akun email utama Anda (Gmail, Outlook) dan akun media sosial terpenting Anda, lalu **aktifkan 2FA sekarang juga**. Ini adalah investasi keamanan 5 menit yang akan melindungi Anda selama bertahun-tahun.</p>
                    <div class="artikel-navigasi-bawah">
                        <a href="karya.php" class="tombol-kembali">&larr; Kembali ke Galeri Karya</a>
                    </div>
                </section>
            </div>
        </article>
    </main>
     <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> LetsForensic. Sebuah Inisiatif untuk Keamanan Digital.</p>
        </div>
    </footer>
    <script src="matrix.js"></script>
</body>
</html>