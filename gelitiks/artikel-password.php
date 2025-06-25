<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seni Membuat Password Anti-Bobol - JagaSiber</title>
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
                    <h1>Lebih dari Sekadar Kata: Seni Membuat Password Anti-Bobol</h1>
                    <div class="artikel-meta"><span>Ditulis oleh: Tim JagaSiber</span> | <span>Waktu baca: 7 menit</span></div>
                    <img src="https://www.webassetscdn.com/avira/prod-blog/wp-content/uploads/2020/08/Browser-based-password-managers-vs.-dedicated-password-managers-1024x768.jpg" alt="Password yang Kuat" class="featured-image">
                </header>
                <section class="artikel-konten">
                    <p class="intro">Password adalah kunci pintu depan kehidupan digitalmu. Jika kuncinya lemah dan mudah diduplikasi, maka seluruh aset digitalmu—mulai dari media sosial hingga rekening bank—berada dalam bahaya besar. Membuat password yang kuat bukanlah hal yang rumit, melainkan sebuah seni.</p>
                    <h2>Mengapa Password 'kuat123' Adalah Ide Buruk?</h2>
                    <p>Peretas tidak menebak password satu per satu. Mereka menggunakan program komputer yang bisa mencoba miliaran kombinasi per detik (Brute-force Attack) atau menggunakan daftar password yang sudah pernah bocor dari situs lain (Credential Stuffing). Password yang pendek, umum, dan mudah ditebak akan jebol dalam hitungan detik.</p>
                    <h2>Studi Kasus: "Efek Domino Akun Rian"</h2>
                    <blockquote><p>"Rian menggunakan password yang sama, 'rianmaingame99', untuk semua akunnya: email, media sosial, dan akun game online-nya. Suatu hari, data dari sebuah forum online kecil tempat ia terdaftar bocor, termasuk passwordnya. Peretas mengambil data itu, mencobanya di Gmail, dan berhasil masuk. Dari sana, mereka me-reset password akun game Rian yang berisi item senilai jutaan rupiah. Semua lenyap karena satu password yang lemah dan dipakai di mana-mana."</p></blockquote>
                    <h2>Cara Membuat & Mengelola Password Kuat (The Golden Rules)</h2>
                    <ol>
                        <li><strong>Panjang Lebih Baik dari Rumit:</strong> Password dengan 15+ karakter jauh lebih kuat daripada password 8 karakter dengan banyak simbol.</li>
                        <li><strong>Gunakan Metode Passphrase:</strong> Pilih 4-5 kata acak yang tidak berhubungan dan gabungkan. Contoh: <code>kopi-pohon-baterai-jingga</code>.</li>
                        <li><strong>Satu Akun, Satu Password Unik:</strong> Jangan pernah memakai ulang password.</li>
                        <li><strong>Gunakan Password Manager:</strong> Ini adalah solusi terbaik. Aplikasi seperti Bitwarden atau 1Password akan membuatkan password super kuat untuk setiap akun dan menyimpannya dengan aman.</li>
                        <li><strong>AKTIFKAN AUTENTIKASI DUA FAKTOR (2FA):</strong> Ini adalah jaring pengaman terpenting. Bahkan jika peretas tahu passwordmu, mereka tidak akan bisa masuk tanpa kode dari HP-mu.</li>
                    </ol>
                    <h2>Bagaimana Jika Curiga Password Bocor?</h2>
                    <ul>
                        <li><strong>Periksa di 'Have I Been Pwned?':</strong> Kunjungi situs <a href="https://haveibeenpwned.com/" target="_blank">Have I Been Pwned?</a> dan masukkan alamat emailmu untuk melihat apakah akunmu pernah terlibat dalam kebocoran data.</li>
                        <li><strong>Segera Ganti Password:</strong> Jika akunmu muncul di sana, segera ganti password di situs tersebut dan di situs lain mana pun yang menggunakan password serupa.</li>
                        <li><strong>Amankan Akun:</strong> Tinjau aktivitas login terakhir jika ada, dan pastikan tidak ada perangkat asing yang terhubung ke akunmu.</li>
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