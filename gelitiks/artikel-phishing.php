<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jangan Terpancing! Panduan Mengenali Phishing - JagaSiber</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Lora:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <canvas id="matrix-canvas"></canvas>
    <nav>
        <div class="container">
            <a href="index.php" class="logo">LetsForensic🛡️</a>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="index.php#tentang" class="active">Tentang</a></li>
                <li><a href="kuis.php" class="button-nav">Mulai Kuis</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <article class="artikel-wrapper">
            <div class="container-artikel">
                <header class="artikel-header">
                    <h1>Jangan Terpancing! Panduan Lengkap Mengenali Phishing</h1>
                    <div class="artikel-meta"><span>Ditulis oleh: Tim JagaSiber</span> | <span>Waktu baca: 6 menit</span></div>
                    <img src="https://imageio.forbes.com/specials-images/imageserve/65cb9e725c84496aeccd33c1/0x0.jpg?format=jpg&height=900&width=1600&fit=bounds" alt="Ancaman Phishing" class="featured-image">
                </header>
                <section class="artikel-konten">
                    <p class="intro">Pernah dapat SMS "Selamat Anda memenangkan undian!" atau email dari 'bank' yang meminta verifikasi data? Hati-hati, itu mungkin 'kail' dari seorang penipu. Selamat datang di dunia phishing.</p>
                    <h2>Apa Itu Phishing Sebenarnya?</h2>
                    <p>Phishing adalah upaya penipuan untuk mendapatkan informasi sensitif—seperti nama pengguna, password, dan detail kartu kredit—dengan menyamar sebagai entitas tepercaya dalam komunikasi elektronik. Seperti memancing ikan, peretas melemparkan 'umpan' berupa pesan palsu dan berharap ada korban yang 'memakannya'.</p>
                    <h2>Studi Kasus: "Notifikasi Palsu Paket Ekspedisi"</h2>
                    <blockquote><p>"Ibu Desi menerima pesan WhatsApp dari nomor tak dikenal yang mengaku sebagai kurir. Pesan itu berisi file dengan nama 'Lihat Foto Paket Anda.apk'. Karena memang sedang menunggu paket, Ibu Desi tanpa ragu meng-klik dan meng-install file tersebut. Tanpa disadari, ia baru saja meng-install malware yang bisa membaca SMS, termasuk kode OTP dari m-banking miliknya. Saldonya pun terkuras habis."</p></blockquote>
                    <h2>Cara Pencegahan: Kenali Ciri-cirinya!</h2>
                    <ol>
                        <li><strong>Periksa Alamat Pengirim:</strong> Arahkan mouse ke nama pengirim email (jangan diklik) untuk melihat alamat email aslinya. Alamat email resmi tidak akan menggunakan domain publik seperti `@gmail.com` atau memiliki ejaan yang aneh.</li>
                        <li><strong>Waspada Rasa Urgensi:</strong> Pesan phishing seringkali menciptakan kepanikan, seperti "Akun Anda akan ditangguhkan dalam 24 jam!".</li>
                        <li><strong>Perhatikan Tata Bahasa:</strong> Banyak pesan phishing yang memiliki tata bahasa buruk atau salah ketik.</li>
                        <li><strong>Jangan Klik Link Sembarangan:</strong> Arahkan mouse ke atas link untuk melihat URL tujuan yang sebenarnya di pojok kiri bawah browser. Jika berbeda dengan teksnya, jangan diklik.</li>
                        <li><strong>Instalasi Aplikasi Hanya dari Toko Resmi:</strong> Jangan pernah meng-install file `.apk` dari luar Google Play Store atau App Store.</li>
                    </ol>
                    <h2>Sudah Terlanjur Klik atau Isi Data? Lakukan Ini Segera!</h2>
                    <ul>
                        <li><strong>Segera Ganti Password:</strong> Ubah password akun yang datanya kamu masukkan (email, media sosial, m-banking).</li>
                        <li><strong>Aktifkan Autentikasi Dua Faktor (2FA):</strong> Ini adalah lapisan pengaman terkuatmu. Aktifkan 2FA di semua akun penting.</li>
                        <li><strong>Hubungi Pihak Terkait:</strong> Jika menyangkut data bank, segera hubungi call center resmi bank tersebut.</li>
                        <li><strong>Pindai Perangkat dengan Antivirus:</strong> Lakukan full scan untuk memastikan tidak ada malware yang ter-install.</li>
                    </ul>
                    <div class="artikel-navigasi-bawah">
                        <a href="index.php" class="tombol-kembali">&larr; Kembali ke Beranda</a>
                        <a href="kuis.php" class="cta-button-artikel">Uji Pemahamanmu!</a>
                    </div>
                </section>
            </div>
        </article>
    </main>
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> JagaSiber. Sebuah Inisiatif untuk Keamanan Digital.</p>
        </div>
    </footer>
    <script src="matrix.js"></script>
</body>
</html>