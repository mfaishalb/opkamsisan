<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang LetsForensic - Gerakan Literasi Keamanan Siber</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <div class="custom-cursor-dot"></div>
    <div class="custom-cursor-circle"></div>
    <canvas id="matrix-canvas"></canvas>
    <nav>
        <div class="container">
            <a href="index.php" class="logo">
                <img src="logo-gelitiks.png" alt="" class="logo-icon">
                <span>LetsForensic🛡️</span>
            </a>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tentang.php" class="active">Tentang</a></li>
                <li><a href="kuis.php" class="button-nav">Kuis Utama</a></li>
            </ul>
        </div>
    </nav>

    <header class="topic-header">
        <div class="container" data-aos="fade-in">
            <div class="topic-header-icon"><i class="fas fa-info-circle"></i></div>
            <h1>Tentang LetsForensic</h1>
            <p>Gerakan Literasi Keamanan Siber untuk Indonesia yang Lebih Aman</p>
        </div>
    </header>

    <main>
        <section class="about-section">
            <div class="container about-container">
                <div class="about-image" data-aos="fade-right">
                    <img src="kapeLogo.png" alt="Misi LetsForensic">
                </div>
                <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                    <h2>Misi Kami</h2>
                    <p>LetsForensic lahir dari keprihatinan mendalam terhadap maraknya kasus kejahatan siber di Indonesia. Misi kami sederhana: Memberikan edukasi keamanan siber yang mudah diakses, mudah dipahami, dan gratis bagi semua orang. Kami percaya bahwa pengetahuan adalah perisai terbaik untuk melindungi diri di dunia digital.</p>
                </div>
            </div>
        </section>

        <section class="team-section">
            <div class="container">
                <h2 class="section-heading" data-aos="fade-up">Tim di Balik Layar</h2>
                <div class="team-grid">
                    <div class="team-card" data-aos="fade-up" data-aos-delay="100">
                        <img src="potoical.jpg" alt="Foto Tim 1" class="team-photo">
                        <h3>Muhammad Faishal Bushoiri</h3>
                        <p class="team-role">Project Lead & Developer</p>
                        <p class="team-bio"></p>
                    </div>
                    <div class="team-card" data-aos="fade-up" data-aos-delay="200">
                        <img src="potoaishwa.jpg" alt="Foto Tim 2" class="team-photo">
                        <h3>Ni Putu Aishwara Kusumaningtyas Sudana Putri</h3>
                        <p class="team-role">Content & Research Lead</p>
                        <p class="team-bio"></p>
                    </div>
                    <div class="team-card" data-aos="fade-up" data-aos-delay="300">
                        <img src="potonelson.jpg" alt="Foto Tim 3" class="team-photo">
                        <h3>Rio Nelson Caesar Simorangkir</h3>
                        <p class="team-role">UI/UX & Community Manager</p>
                        <p class="team-bio">.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="container">
            <p>© <?php echo date("Y"); ?> LetsForensic. Semua Hak Cipta Dilindungi.</p>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init({ once: true });</script>
    <script src="matrix.js"></script>
    <script src="cursor.js"></script>
</body>
</html>