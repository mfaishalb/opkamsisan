<?php
// Mulai sesi
session_start();

// Hancurkan sesi kuis jika ada
unset($_SESSION['current_question']);
unset($_SESSION['score']);
unset($_SESSION['answered_questions']);
unset($_SESSION['quiz_in_progress']); // Hancurkan juga flag ini
?>
<!DOCTYPE html>
<html lang="id">
    
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GELITIKS - Jadilah Pahlawan Digitalmu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <canvas id="matrix-canvas"></canvas>
    <nav>
        <div class="container">
            <a href="index.php" class="logo">GELITIKS🛡️</a>
            <ul>
                <li><a href="index.php" class="active">Beranda</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="kuis.php" class="button-nav">Mulai Kuis</a></li>
            </ul>
        </div>
    </nav>
    <header class="hero">
        <div class="container hero-content" data-aos="fade-in" data-aos-duration="1000">
            <h1><span class="typed-text"></span><span class="cursor">&nbsp;</span></h1>
            <p>Di dunia yang serba terhubung, data pribadimu adalah aset paling berharga. Pelajari cara melindunginya dari ancaman tak terlihat. Mulai dari sini, mulai dari sekarang.</p>
            <a href="kuis.php" class="cta-button">Uji Pengetahuanmu Sekarang →</a>
        </div>
    </header>
    <main>
        <section id="tentang" class="info-section">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Mengapa Keamanan Siber Penting?</h2>
                    <p>Setiap klik, setiap login, setiap koneksi adalah potensi risiko. Mengerti dasarnya bukan lagi pilihan, tapi keharusan.</p>
                </div>
                <div class="features-grid">
                    <a href="artikel-malware.php?topic=malware" class="feature-card-link">
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                            <img src="https://image.web.id/images/Apa-itu-Malware-Mengetahui-Ancaman-dan-Cara-Mencegahnya-1140x570.jpg" alt="Ilustrasi Malware" class="card-image">
                            <div class="card-content">
                                <h3>Lindungi dari Malware</h3>
                                <p>Jauhkan perangkatmu dari virus dan ransomware yang dapat merusak dan mencuri datamu.</p>
                                <span class="baca-selengkapnya">Baca Selengkapnya →</span>
                            </div>
                        </div>
                    </a>
                    <a href="artikel-phishing.php?topic=phishing" class="feature-card-link">
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYEbWJ7sb57vqTkMX5qCu_M4P466NdRHlliQ&s" alt="Ilustrasi Phishing" class="card-image">
                            <div class="card-content">
                                <h3>Waspada Phishing</h3>
                                <p>Belajar mengenali email dan pesan palsu yang mencoba menipu untuk mendapatkan data pribadimu.</p>
                                <span class="baca-selengkapnya">Baca Selengkapnya →</span>
                            </div>
                        </div>
                    </a>
                    <a href="artikel-password.php?topic=password" class="feature-card-link">
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                            <img src="https://www.teknosid.com/wp-content/uploads/2020/02/Apa-itu-Password.jpg" alt="Ilustrasi Password" class="card-image">
                            <div class="card-content">
                                <h3>Password yang Kuat</h3>
                                <p>Kunci digitalmu adalah pertahanan pertama. Pelajari cara membuat password yang anti-bobol.</p>
                                <span class="baca-selengkapnya">Baca Selengkapnya →</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section id="modul-pembelajaran" class="modul-section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Kurikulum Belajar Terstruktur</h2>
            <p>Pengetahuan adalah perisai terbaik. Modul terstruktur kami dirancang untuk membawamu dari nol hingga paham, satu langkah pada satu waktu.</p>
        </div>

        <div class="modul-baru-grid">

            <a href="topik.php?topic=malware" class="modul-baru-card" data-aos="fade-up" data-aos-delay="100">
                <div class="modul-baru-icon">
                    <i class="fas fa-shield-virus"></i>
                </div>
                <h3 class="modul-baru-title">Ancaman Malware</h3>
                <p class="modul-baru-desc">Pelajari tentang virus, ransomware, dan bagaimana mereka bisa menyusup ke perangkatmu.</p>
                <div class="modul-baru-meta">
                    <span><i class="fas fa-book"></i> 5 Bab</span>
                    <span><i class="fas fa-clock"></i> Total 55 Menit</span>
                </div>
                <span class="modul-baru-button">Mulai Belajar</span>
            </a>

            <a href="topik.php?topic=phishing" class="modul-baru-card" data-aos="fade-up" data-aos-delay="200">
                <div class="modul-baru-icon">
                    <i class="fas fa-fish"></i>
                </div>
                <h3 class="modul-baru-title">Jebakan Phishing</h3>
                <p class="modul-baru-desc">Kenali ciri-ciri penipuan online dan cara menghindarinya agar data tetap aman.</p>
                <div class="modul-baru-meta">
                    <span><i class="fas fa-book"></i> 3 Bab</span>
                    <span><i class="fas fa-clock"></i> Total 54 Menit</span>
                </div>
                <span class="modul-baru-button">Mulai Belajar</span>
            </a>

            <a href="topik.php?topic=password" class="modul-baru-card" data-aos="fade-up" data-aos-delay="300">
                <div class="modul-baru-icon">
                    <i class="fas fa-key"></i>
                </div>
                <h3 class="modul-baru-title">Kekuatan Password</h3>
                <p class="modul-baru-desc">Temukan seni membuat dan mengelola password yang kuat dan anti-bobol.</p>
                <div class="modul-baru-meta">
                    <span><i class="fas fa-book"></i> 3 Bab</span>
                    <span><i class="fas fa-clock"></i> Total 50 Menit</span>
                </div>
                <span class="modul-baru-button">Mulai Belajar</span>
            </a>

        </div>
    </div>
</section>
        <section id="video-edukasi" class="video-section">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Satu Video Bernilai Ribuan Kata</h2>
                    <p>Tonton modul singkat di bawah ini untuk memahami mengapa setiap detail keamanan itu penting dalam kehidupan digital kita.</p>
                </div>
                <div class="videos-grid" data-aos="fade-up" data-aos-delay="100">
                    <div class="video-wrapper">
                        <iframe 
                            width="560" 
                            height="315" 
                            src="https://www.youtube.com/embed/IvBfxSJWx6A?si=48sB3ihWHb3oB1nU" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="video-wrapper">
                        <iframe 
                            width="560" 
                            height="315" 
                            src="https://www.youtube.com/embed/kGzVNpg5KRA?si=v4bMdsgJNacsBJKY" 
                            title=" 
                            title="YouTube video player 2" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </section> 

        <section class="cta-akhir">
            <div class="container" data-aos="zoom-in">
                <h2>Siap Mengambil Langkah Pertama?</h2>
                <p>Kuis singkat ini dirancang untuk memberimu gambaran seberapa jauh pemahamanmu. Tidak ada skor buruk, yang ada hanya kemauan untuk belajar.</p>
                <a href="kuis.php" class="cta-button">Saya Siap, Mulai Kuis!</a>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> GELITIKS. Sebuah Inisiatif untuk Keamanan Digital.</p>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script> AOS.init(); </script>
    <script src="matrix.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const typedTextSpan = document.querySelector(".typed-text");
            const cursorSpan = document.querySelector(".cursor");

            const textArray = ["Jadilah Pahlawan Digital", "Amankan Aset Berhargamu", "Mulai Belajar Sekarang"];
            const typingDelay = 100;
            const erasingDelay = 50;
            const newTextDelay = 2000;
            let textArrayIndex = 0;
            let charIndex = 0;

            function type() {
                if (charIndex < textArray[textArrayIndex].length) {
                    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
                    charIndex++;
                    setTimeout(type, typingDelay);
                } 
                else {
                    cursorSpan.classList.remove("typing");
                    setTimeout(erase, newTextDelay);
                }
            }

            function erase() {
                if (charIndex > 0) {
                    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
                    charIndex--;
                    setTimeout(erase, erasingDelay);
                } 
                else {
                    cursorSpan.classList.remove("typing");
                    textArrayIndex++;
                    if(textArrayIndex >= textArray.length) textArrayIndex = 0;
                    setTimeout(type, typingDelay + 1100);
                }
            }

            if(textArray.length) setTimeout(type, newTextDelay + 250);
        });
    </script>
</body>
</html>