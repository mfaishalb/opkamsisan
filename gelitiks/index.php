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
        <a href="index.php" class="logo">LetsForensic🛡️</a>
        <ul>
            <li><a href="index.php" class="active">Beranda</a></li>
            <li><a href="karya.php">Karya</a></li>
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
                    <a href="/opkamsisan/d21/" class="feature-card-link" target="_blank">
                          <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                          <div class="card-image-wrapper"><img src="d21.png" alt="Proyek D21" class="card-image">
                           </div>
                            <div class="card-content">
                                <h3>Proyek D21</h3>
                                <p>Lihat dan jelajahi proyek lain yang terintegrasi langsung di dalam platform LetsForensic.</p>
                                <span class="baca-selengkapnya">Baca Selengkapnya →</span>
                            </div>
                        </div>
                    </a>
                    <a href="artikel-malware.php?topic=malware" class="feature-card-link">
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-image-wrapper"><img src="https://image.web.id/images/Apa-itu-Malware-Mengetahui-Ancaman-dan-Cara-Mencegahnya-1140x570.jpg" alt="Ilustrasi Malware" class="card-image"></div>
                            <div class="card-content">
                                <h3>Lindungi dari Malware</h3>
                                <p>Jauhkan perangkatmu dari virus dan ransomware yang dapat merusak dan mencuri datamu.</p>
                                <span class="baca-selengkapnya">Baca Selengkapnya →</span>
                            </div>
                        </div>
                    </a>
                    <a href="artikel-phising.php?topic=phishing" class="feature-card-link">
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                             <div class="card-image-wrapper"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYEbWJ7sb57vqTkMX5qCu_M4P466NdRHlliQ&s" alt="Ilustrasi Phishing" class="card-image"></div>
                            <div class="card-content">
                                <h3>Waspada Phishing</h3>
                                <p>Belajar mengenali email dan pesan palsu yang mencoba menipu untuk mendapatkan data pribadimu.</p>
                                <span class="baca-selengkapnya">Baca Selengkapnya →</span>
                            </div>
                        </div>
                    </a>
                    <a href="artikel-password.php?topic=password" class="feature-card-link">
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                             <div class="card-image-wrapper"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3zzn4hvqEKv2Gqxynat-7zZKQmYoRAYeUvQ&s" alt="Ilustrasi Password" class="card-image"></div>
                            <div class="card-content">
                                <h3>Password yang Kuat</h3>
                                <p>Kunci digitalmu adalah pertahanan pertama. Pelajari cara membuat password yang anti-bobol.</p>
                                <span class="baca-selengkapnya">Baca Selengkapnya →</span>
                            </div>
                        </div>
                    </a>
                    <div class="feature-card coming-soon" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-image-wrapper"><img src="https://static.vecteezy.com/system/resources/thumbnails/003/582/701/small_2x/coming-soon-background-illustration-template-design-free-vector.jpg" alt="Ilustrasi Social Engineering" class="card-image"></div>
                        <div class="card-content">
                            <h3>Rekayasa Sosial (Segera Hadir)</h3>
                            <p>Memahami seni manipulasi psikologis yang digunakan peretas untuk menipu targetnya.</p>
                            <span class="baca-selengkapnya">COMING SOON</span>
                        </div>
                    </div>
                    <div class="feature-card coming-soon" data-aos="fade-up" data-aos-delay="500">
                        <div class="card-image-wrapper"><img src="https://static.vecteezy.com/system/resources/thumbnails/003/582/701/small_2x/coming-soon-background-illustration-template-design-free-vector.jpg" alt="Ilustrasi Keamanan Jaringan" class="card-image"></div>
                        <div class="card-content">
                            <h3>Keamanan Jaringan (Segera Hadir)</h3>
                            <p>Mengamankan koneksi Wi-Fi Anda dan mengenali bahaya jaringan publik.</p>
                            <span class="baca-selengkapnya">COMING SOON</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <section id="modul-pembelajaran" class="modul-section">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Kurikulum Belajar Terstruktur</h2>
                    <p>Pengetahuan adalah perisai terbaik. Modul terstruktur kami dirancang untuk membawamu dari nol hingga paham, satu langkah pada satu waktu.</p>
                </div>

                <div class="modul-card-grid">

                    <a href="topik.php?topic=malware" class="modul-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="modul-card-icon"><i class="fas fa-shield-virus"></i></div>
                        <h3>Ancaman Malware</h3>
                        <p>Pelajari tentang virus, ransomware, dan bagaimana mereka bisa menyusup ke perangkatmu.</p>
                    </a>

                    <a href="topik.php?topic=phishing" class="modul-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="modul-card-icon"><i class="fas fa-fish"></i></div>
                        <h3>Jebakan Phishing</h3>
                        <p>Kenali ciri-ciri penipuan online dan cara menghindarinya agar data tetap aman.</p>
                    </a>

                    <a href="topik.php?topic=password" class="modul-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="modul-card-icon"><i class="fas fa-key"></i></div>
                        <h3>Kekuatan Password</h3>
                        <p>Temukan seni membuat dan mengelola password yang kuat dan anti-bobol.</p>
                    </a>
                    
                    <a href="topik.php?topic=rekayasa-sosial" class="modul-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="modul-card-icon"><i class="fas fa-theater-masks"></i></div>
                        <h3>Rekayasa Sosial</h3>
                        <p>Memahami seni manipulasi psikologis yang digunakan peretas untuk menipu targetnya.</p>
                    </a>

                    <a href="topik.php?topic=keamanan-jaringan" class="modul-card" data-aos="fade-up" data-aos-delay="500">
                        <div class="modul-card-icon"><i class="fas fa-wifi"></i></div>
                        <h3>Keamanan Jaringan</h3>
                        <p>Mengamankan koneksi Wi-Fi Anda dan mengenali bahaya jaringan publik.</p>
                    </a>

                    <a href="topik.php?topic=data-pribadi" class="modul-card" data-aos="fade-up" data-aos-delay="600">
                        <div class="modul-card-icon"><i class="fas fa-user-secret"></i></div>
                        <h3>Data Pribadi Anda</h3>
                        <p>Pelajari cara mengelola jejak digital dan menjaga informasi pribadi tetap aman.</p>
                    </a>
                </div>
            </div>
        </section>
           <main>
        <section id="glosarium" class="glossary-section">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Glosarium Pejuang Siber</h2>
                    <p>Kenali istilah-istilah penting dalam medan perang digital. Klik untuk melihat definisi.</p>
                </div>
                <div class="glossary-grid" data-aos="fade-up" data-aos-delay="100">
                    <div class="glossary-card">
                        <div class="term">VPN</div>
                        <div class="definition">Singkatan dari Virtual Private Network. Sebuah 'terowongan' aman yang mengenkripsi koneksi internet Anda, sangat penting saat menggunakan Wi-Fi publik.</div>
                    </div>
                    <div class="glossary-card"><div class="term">Firewall</div><div class="definition">Tembok digital yang memonitor dan menyaring lalu lintas jaringan, memblokir akses yang tidak sah atau berbahaya.</div></div>
                    <div class="glossary-card"><div class="term">Enkripsi</div><div class="definition">Proses mengubah data menjadi kode rahasia untuk mencegah akses yang tidak sah. Hanya pihak yang memiliki 'kunci' yang bisa membacanya.</div></div>
                    <div class="glossary-card"><div class="term">Zero-Day</div><div class="definition">Sebuah celah keamanan pada software yang baru saja ditemukan oleh peretas dan belum diketahui oleh pembuat software, sehingga belum ada 'tambalan' atau perbaikannya.</div></div>
                    <div class="glossary-card"><div class="term">Botnet</div><div class="definition">Sekumpulan komputer yang telah diinfeksi malware dan dikendalikan dari jarak jauh oleh peretas untuk melancarkan serangan, seperti DDoS.</div></div>
                    <div class="glossary-card"><div class="term">DDoS</div><div class="definition">Singkatan dari Distributed Denial-of-Service. Serangan yang membanjiri sebuah server dengan lalu lintas internet palsu hingga server tersebut down dan tidak bisa diakses.</div></div>
                </div>
            </div>
        </section>

        </main>

    <div id="glossary-tooltip" class="tooltip">
        <h4 id="tooltip-term"></h4>
        <p id="tooltip-definition"></p>
    </div>
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

        <section class="literasi-siber">
    <div class="container">
        <h2>Pojok Literasi Siber</h2>
        <p class="subjudul">Tingkatkan kewaspadaan digital Anda dengan konten pilihan kami.</p>
        
        <div class="galeri-konten">
            
    <div class="item-konten" data-aos="fade-up" data-aos-delay="100">
        <div class="item-konten-gambar" style="background-image: url('https://images.unsplash.com/photo-1593720213428-28a5b9e94613?q=80&w=2070&auto=form&fit=crop');"></div>
        <div class="info-konten">
            <div class="info-konten-header">
                <span class="kategori kategori-komik"><i class="fas fa-comment-dots"></i> KOMIK</span>
                <a href="baca-komik.php" target="_blank" class="tombol-baca">Baca Sekarang <i class="fas fa-arrow-right"></i></a>
            </div>
            <h3>Awas! Jebakan Phishing Undangan Digital</h3>
            <p>Kenali ciri-ciri pesan penipuan berkedok undangan .apk agar data pribadimu tidak dicuri.</p>
        </div>
    </div>



<div class="item-konten" data-aos="fade-up" data-aos-delay="200">
        <div class="item-konten-gambar" style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop');"></div>
        <div class="info-konten">
            <div class="info-konten-header">
                <span class="kategori kategori-panduan"><i class="fas fa-book-open"></i> PANDUAN</span>
                <a href="panduan-password.php" class="tombol-baca">Pelajari Caranya <i class="fas fa-arrow-right"></i></a>
            </div>
            <h3>Cara Membuat Kata Sandi Anti-Bobol 2025</h3>
            <p>Tips praktis untuk membuat dan mengelola kata sandi yang kuat agar semua akunmu tetap aman.</p>
        </div>
    </div>

    <div class="item-konten" data-aos="fade-up" data-aos-delay="300">
        <div class="item-konten-gambar" style="background-image: url('https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?q=80&w=2070&auto=format&fit=crop');"></div>
        <div class="info-konten">
            <div class="info-konten-header">
                <span class="kategori kategori-buku"><i class="fas fa-bookmark"></i> BUKU</span>
                <a href="rekomendasi-buku.php" class="tombol-baca">Lihat Sinopsis <i class="fas fa-arrow-right"></i></a>
            </div>
            <h3>The Art of Deception: Seni Mengelabui</h3>
            <p>Mengapa manusia adalah celah keamanan terbesar? Temukan jawabannya di buku legendaris ini.</p>
        </div>
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
            <p>&copy; <?php echo date("Y"); ?> LetsForensic. Sebuah Inisiatif untuk Keamanan Digital.</p>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script> AOS.init(); </script>
    <script src="matrix.js"></script>
    <script src="matrix.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const glossaryCards = document.querySelectorAll('.glossary-card');
            
            // Buat elemen tooltip sekali saja dan sembunyikan
            const tooltip = document.createElement('div');
            tooltip.id = 'glossary-tooltip';
            tooltip.className = 'tooltip';
            document.body.appendChild(tooltip);

            glossaryCards.forEach(card => {
                card.addEventListener('click', (event) => {
                    event.stopPropagation();

                    // Cek apakah tooltip untuk kartu ini sudah aktif
                    const isAlreadyActive = card.classList.contains('tooltip-active');
                    
                    // Matikan semua tooltip lain
                    document.querySelectorAll('.tooltip-active').forEach(activeCard => {
                        activeCard.classList.remove('tooltip-active');
                    });
                    tooltip.classList.remove('active');


                    if (!isAlreadyActive) {
                        const term = card.querySelector('.term').textContent;
                        const definition = card.querySelector('.definition').textContent;
                        
                        tooltip.innerHTML = `<h4>${term}</h4><p>${definition}</p>`;

                        const cardRect = card.getBoundingClientRect();
                        tooltip.style.left = `${cardRect.left + (cardRect.width / 2)}px`;
                        tooltip.style.top = `${window.scrollY + cardRect.top - 10}px`;

                        tooltip.classList.add('active');
                        card.classList.add('tooltip-active');
                    }
                });
            });

            // Klik di mana saja di luar kartu untuk menutup tooltip
            document.addEventListener('click', function() {
                document.querySelectorAll('.tooltip-active').forEach(activeCard => {
                    activeCard.classList.remove('tooltip-active');
                });
                tooltip.classList.remove('active');
            });
        });
    </script>
</body>
</html>
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
