<?php
require_once 'data_modul.php'; // Panggil bank data kita
$topic_key = $_GET['topic'] ?? 'malware';
$topic_data = $learning_data[$topic_key];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topik: <?php echo htmlspecialchars($topic_data['title']); ?> - JagaSiber</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="page-background">
    <nav>
        <div class="container">
            <a href="index.php" class="logo">GELITIKS🛡️</a>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="kuis.php" class="button-nav">Kuis Utama</a></li>
            </ul>
        </div>
    </nav>

    <header class="topic-header">
        <div class="container">
            <div class="topic-header-icon"><i class="fas <?php echo $topic_data['icon']; ?>"></i></div>
            <h1><?php echo htmlspecialchars($topic_data['title']); ?></h1>
            <p><?php echo htmlspecialchars($topic_data['subtitle']); ?></p>
        </div>
    </header>

    <main class="container" style="padding-top: 40px; padding-bottom: 60px;">
        <a href="index.php" class="back-to-home-link">← Kembali ke Semua Topik</a>

        <h2 class="section-heading">Semua Bab</h2>
        <div class="chapter-grid">
            <?php foreach ($topic_data['chapters'] as $bab_id => $chapter): ?>
                <a href="pelajaran.php?topic=<?php echo $topic_key; ?>&bab=<?php echo $bab_id; ?>" class="chapter-card">
                    <div class="chapter-card-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="chapter-card-info">
                        <h3><?php echo htmlspecialchars($chapter['title']); ?></h3>
                        <p><?php echo count($chapter['lessons']); ?> Sub-bab</p>
                    </div>
                    <div class="chapter-card-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </main>
    
    <script src="matrix.js"></script>
</body>
</html>