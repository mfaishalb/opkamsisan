<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benteng Digital: Mengamankan Wi-Fi Rumah Anda - LetsForensic</title>
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
                    <h1>Benteng Digital: Panduan Lengkap Mengamankan Wi-Fi Rumah Anda</h1>
                    <div class="artikel-meta"><span>Waktu baca: 6 menit</span></div>
                    <img src="https://mysertifikasi.com/wp-content/uploads/2024/07/Mengelola-Keamanan-Jaringan-WiFi-1024x576.png" alt="Keamanan Wi-Fi" class="featured-image">
                </header>
                <section class="artikel-konten">
                    <p class="intro">Jaringan Wi-Fi rumah adalah gerbang utama menuju dunia digital Anda. Namun, jika tidak diamankan dengan benar, gerbang ini bisa menjadi pintu masuk bagi penyusup. Mari kita bangun benteng digital yang kokoh.</p>
                    <h2>Mengapa Wi-Fi Bawaan Pabrik Berbahaya?</h2>
                    <p>Setiap router Wi-Fi datang dengan nama (SSID) dan password default yang seringkali sama untuk ribuan perangkat (misalnya, nama 'admin', password 'admin'). Peretas memiliki daftar password default ini dan dapat dengan mudah masuk ke jaringan Anda jika Anda tidak pernah mengubahnya.</p>
                    <h2>Checklist Wajib untuk Keamanan Wi-Fi</h2>
                    <ol>
                        <li><strong>Ganti Login Admin Router:</strong> Ini adalah langkah pertama dan terpenting. Ubah username dan password untuk masuk ke halaman pengaturan router Anda (biasanya diakses melalui alamat 192.168.1.1).</li>
                        <li><strong>Gunakan Enkripsi WPA3 (atau WPA2):</strong> Pastikan mode keamanan jaringan Anda adalah WPA3. Jika tidak tersedia, WPA2-AES adalah pilihan teraman berikutnya. Hindari WEP atau WPA karena sudah usang dan mudah dibobol.</li>
                        <li><strong>Buat Password Wi-Fi yang Kuat:</strong> Gunakan passphrase panjang yang sudah kita pelajari. Jangan gunakan nama atau tanggal lahir Anda.</li>
                        <li><strong>Ubah Nama SSID Bawaan:</strong> Jangan gunakan nama default seperti "TP-Link_1234". Mengubahnya tidak menambah keamanan secara langsung, tapi mencegah peretas mengetahui merek router Anda.</li>
                        <li><strong>Buat Jaringan Tamu (Guest Network):</strong> Jika router Anda mendukung, aktifkan jaringan tamu. Biarkan teman atau tamu terhubung ke sini. Jaringan ini terisolasi dari jaringan utama Anda, sehingga perangkat tamu tidak bisa melihat laptop atau file Anda.</li>
                    </ol>
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