<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek Terintegrasi: D21 - LetsForensic🛡️/title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="page-background">
    <nav>
        <div class="container">
            <a href="index.php" class="logo">
                <img src="logo-gelitiks.png" alt="Ikon Logo GELITIKS" class="logo-icon">
                <span>GELITIKS</span>
            </a>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="proyek_d21.php" class="active">Proyek D21</a></li>
                <li><a href="kuis.php" class="button-nav">Kuis Utama</a></li>
            </ul>
        </div>
    </nav>

    <header class="topic-header">
        <div class="container">
            <div class="topic-header-icon"><i class="fas fa-project-diagram"></i></div>
            <h1>Proyek Terintegrasi: D21</h1>
            <p>Menampilkan konten dari proyek lain secara seamless di dalam GELITIKS.</p>
        </div>
    </header>

    <main class="container" style="padding-top: 40px; padding-bottom: 60px;">
        <div class="iframe-wrapper">
            <iframe src="/opkamsisan/d21/"></iframe>
        </div>
    </main>

    <footer class="footer-dark">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> GELITIKS. Integrasi Proyek.</p>
        </div>
    </footer>
</body>
</html>