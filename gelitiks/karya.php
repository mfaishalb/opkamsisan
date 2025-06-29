<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Karya - LetsForensic</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        /* ... CSS Anda tidak perlu diubah ... */
        .file-explorer-wrapper { max-width: 900px; margin: 0 auto 60px auto; border: 1px solid var(--lightest-navy); border-radius: 8px; background-color: var(--dark-navy); overflow: hidden; margin-top: 40px; }
        .folder { border-bottom: 1px solid var(--lightest-navy); }
        .folder:last-child { border-bottom: none; }
        .folder-header { padding: 15px 20px; cursor: pointer; display: flex; align-items: center; gap: 15px; transition: background-color 0.3s ease; user-select: none; }
        .folder-header:hover { background-color: var(--light-navy); }
        .folder-icon { color: var(--accent-blue); font-size: 1.5rem; width: 30px; text-align: center; }
        .folder-name { font-weight: 700; color: var(--lightest-slate); font-size: 1.1rem; }
        .file-list { padding: 0 25px; background-color: rgba(10, 25, 47, 0.5); display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 30px; max-height: 0; overflow: hidden; transition: max-height 0.5s ease-out, padding 0.5s ease-out; }
        .folder.active .file-list { max-height: 1000px; padding: 25px; }
        .file-item { text-decoration: none; color: var(--slate); text-align: center; }
        .file-item:hover .file-icon-wrapper { transform: scale(1.05); border-color: var(--accent-blue); }
        .file-icon-wrapper { width: 100%; padding-bottom: 100%; position: relative; background-color: var(--light-navy); border-radius: 8px; border: 1px solid var(--lightest-navy); transition: all 0.3s ease; overflow: hidden; }
        .file-icon-wrapper img { position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; }
        .file-name { margin-top: 15px; display: block; font-weight: 500; line-height: 1.4; }
        .modal-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(10, 25, 47, 0.9); backdrop-filter: blur(8px); z-index: 1000; display: none; align-items: center; justify-content: center; animation: fadeIn 0.3s ease; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        .modal-content { position: relative; max-width: 80%; max-height: 90vh; animation: zoomIn 0.3s ease; }
        @keyframes zoomIn { from { transform: scale(0.8); } to { transform: scale(1); } }
        #modal-image { max-width: 100%; max-height: 90vh; display: block; border-radius: 8px; border: 2px solid var(--lightest-navy); }
        .modal-close { position: absolute; top: -15px; right: 5px; color: #fff; font-size: 40px; font-weight: bold; cursor: pointer; transition: color 0.3s ease; }
        .modal-close:hover { color: var(--accent-blue); }
    </style>
</head>
<body class="page-background">
    <canvas id="matrix-canvas"></canvas>
    <nav>
        <div class="container">
            <a href="index.php" class="logo">LetsForensic🛡️</a>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="karya.php" class="active">Karya</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="kuis.php" class="button-nav">Mulai Kuis</a></li>
            </ul>
        </div>
    </nav>

    <header class="topic-header">
        <div class="container">
            <div class="topic-header-icon"><i class="fas fa-folder-tree"></i></div>
            <h1>Galeri Karya</h1>
            <p>Jelajahi arsip digital kami. Klik pada folder untuk melihat isinya.</p>
        </div>
    </header>

    <main class="container" style="padding-top: 100px;">
        <div class="file-explorer-wrapper">
            
            <div class="folder">
                <div class="folder-header">
                    <i class="fas fa-folder folder-icon"></i>
                    <span class="folder-name">Komik Digital (1 File)</span>
                </div>
                <div class="file-list">
                    <a href="baca-komik.php" class="file-item">
                        <div class="file-icon-wrapper"><img src="komik-images/BESTI-KOMUNIKA-EDISI-48_page-0001.jpg" alt="Preview Komik"></div>
                        <span class="file-name">Tipu-Tipu Digital</span>
                    </a>
                </div>
            </div>

            <div class="folder">
                <div class="folder-header">
                    <i class="fas fa-folder folder-icon"></i>
                    <span class="folder-name">Poster Edukasi (5 Files)</span>
                </div>
                <div class="file-list">
                     <a href="lihat-poster.php?img=poster_antara.jpg" class="file-item"><div class="file-icon-wrapper"><img src="poster-images/poster_antara.jpg" alt="Poster Antara News"></div><span class="file-name">Hindari Ancaman Siber</span></a>
                     <a href="lihat-poster.php?img=poster_okezone.jpg" class="file-item"><div class="file-icon-wrapper"><img src="poster-images/poster_okezone.jpg" alt="Poster Okezone"></div><span class="file-name">Waspada .APK</span></a>
                     <a href="lihat-poster.php?img=poster_bsi.jpg" class="file-item"><div class="file-icon-wrapper"><img src="poster-images/poster_bsi.jpg" alt="Poster BSI"></div><span class="file-name">Literasi Digital</span></a>
                     <a href="lihat-poster.php?img=poster_teknologi.jpg" class="file-item"><div class="file-icon-wrapper"><img src="poster-images/poster_teknologi.jpg" alt="Poster Teknologi"></div><span class="file-name">Cyber Security Tech</span></a>
                     <a href="lihat-poster.php?img=poster_jagaakun.jpg" class="file-item"><div class="file-icon-wrapper"><img src="poster-images/poster_jagaakun.jpg" alt="Poster Jaga Akun"></div><span class="file-name">Jaga Akun</span></a>
                </div>
            </div>
            
            <div class="folder">
                <div class="folder-header">
                    <i class="fas fa-folder folder-icon"></i>
                    <span class="folder-name">Artikel Mendalam (9 Files)</span>
                </div>
                <div class="file-list">
                    <a href="artikel-phishing.php" class="file-item"><div class="file-icon-wrapper"><img src="https://imageio.forbes.com/specials-images/imageserve/65cb9e725c84496aeccd33c1/0x0.jpg?format=jpg&height=900&width=1600&fit=bounds" alt="Artikel"></div><span class="file-name">Panduan Phishing</span></a>
                    <a href="artikel-password.php" class="file-item"><div class="file-icon-wrapper"><img src="https://www.webassetscdn.com/avira/prod-blog/wp-content/uploads/2020/08/Browser-based-password-managers-vs.-dedicated-password-managers-1024x768.jpg" alt="Artikel"></div><span class="file-name">Seni Password Kuat</span></a>
                    <a href="artikel-malware.php" class="file-item"><div class="file-icon-wrapper"><img src="https://csirt.blorakab.go.id/storage/post-image/U9CxP0pXXZPM3VCERXU0yLUsrQmKb6M49tCbGxPl.png" alt="Artikel"></div><span class="file-name">Ancaman Malware</span></a>
                
                    <a href="artikel-rekayasa-sosial.php" class="file-item">
                        <div class="file-icon-wrapper"><img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjURHWiMDFhyphenhyphenkdh94Y2q2l6Qab8DdpodN6XtbsDdGZVkiw4XThlpPsSkFHLMfEEX1gId-IlRfDt5cb9E9w0qM5WsVsNxJGlaAPLtjP1G4Beu6xmoGuOXq3sfgQ1gOU5l2YqaGlpqUH5SwfQDkS9DaxqRHuEe4RfqsB0unFtWZOhKm9SrJMvyGYkUNllYcY/s728-rw-e365/mind.jpg" alt="Rekayasa Sosial"></div>
                        <span class="file-name">Meretas Pikiran Manusia</span>
                    </a>
                    <a href="artikel-keamanan-wifi.php" class="file-item">
                        <div class="file-icon-wrapper"><img src="https://media.dekoruma.com/article/2024/08/21095733/7-13.png?fit=300%2C225&ssl=1" alt="Keamanan Wi-Fi"></div>
                        <span class="file-name">Amankan Wi-Fi Rumah Anda</span>
                    </a>
                    <a href="artikel-ransomware.php" class="file-item">
                        <div class="file-icon-wrapper"><img src="https://content.kaspersky-labs.com/fm/press-releases/f8/f8a374b2a1c586b1fd4750859a19c74f/processed/ransomware-q75.jpg" alt="Ransomware"></div>
                        <span class="file-name">Teror Penyandera Data</span>
                    </a>
                    <a href="artikel-jejak-digital.php" class="file-item">
                        <div class="file-icon-wrapper"><img src="https://bijakbersosmed.id/wp-content/uploads/2024/05/2630062590-e1692348851236.webp" alt="Jejak Digital"></div>
                        <span class="file-name">Mengelola Jejak Digital</span>
                    </a>
                    <a href="artikel-2fa.php" class="file-item">
                        <div class="file-icon-wrapper"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLdPe8NDD34KHcxc50nPJscTZOmQfrjINbPA&s" alt="2FA"></div>
                        <span class="file-name">Pentingnya Otentikasi 2 Faktor</span>
                    </a>
                    <a href="artikel-backup.php" class="file-item">
                        <div class="file-icon-wrapper"><img src="https://govtech.ksp.go.id/wp-content/uploads/2022/09/3-types-of-backup.png" alt="Backup Data"></div>
                        <span class="file-name">Strategi Backup Anti-Bencana</span>
                    </a>
                </div> 
            </div>

        </div>
    </main>
    
    <div id="modal-viewer" class="modal-overlay">
        <span class="modal-close" id="modal-close-button">&times;</span>
        <div class="modal-content">
            <img src="" id="modal-image" alt="Tampilan Poster">
        </div>
    </div>

     <footer>
        <div class="container">
            <p>© <?php echo date("Y"); ?> LetsForensic. Sebuah Inisiatif untuk Keamanan Digital.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init({ once: true, duration: 800 });</script>
    <script src="matrix.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- FUNGSI UNTUK FILE EXPLORER ---
            const allFolders = document.querySelectorAll('.folder');
            allFolders.forEach(folder => {
                const header = folder.querySelector('.folder-header');
                if (header) {
                    header.addEventListener('click', () => {
                        const wasActive = folder.classList.contains('active');
                        allFolders.forEach(otherFolder => {
                            otherFolder.classList.remove('active');
                            const otherIcon = otherFolder.querySelector('.folder-icon');
                            if(otherIcon) {
                                otherIcon.classList.remove('fa-folder-open');
                                otherIcon.classList.add('fa-folder');
                            }
                        });
                        if (!wasActive) {
                            folder.classList.add('active');
                            const icon = header.querySelector('.folder-icon');
                            if(icon) {
                                icon.classList.remove('fa-folder');
                                icon.classList.add('fa-folder-open');
                            }
                        }
                    });
                }
            });

            /*
            // KODE YANG MEMBUKA FOLDER PERTAMA SECARA OTOMATIS TELAH DIHAPUS
            if(allFolders.length > 0) {
                ...
            }
            */

            // --- FUNGSI UNTUK MODAL VIEWER POSTER ---
            const fileExplorer = document.querySelector('.file-explorer-wrapper');
            const modalViewer = document.getElementById('modal-viewer');
            const modalImage = document.getElementById('modal-image');
            const closeButton = document.getElementById('modal-close-button');

            if (fileExplorer && modalViewer && modalImage && closeButton) {
                fileExplorer.addEventListener('click', function(event) {
                    const link = event.target.closest('a.karya-poster');
                    if (link) {
                        event.preventDefault(); 
                        const imageUrl = link.href; 
                        modalImage.src = imageUrl;
                        modalViewer.style.display = 'flex';
                    }
                });

                function closeModal() {
                    modalViewer.style.display = 'none';
                    modalImage.src = '';
                }
                closeButton.addEventListener('click', closeModal);
                modalViewer.addEventListener('click', function(event) {
                    if (event.target === modalViewer) {
                        closeModal();
                    }
                });
            }
        });
    </script>
</body>
</html>
