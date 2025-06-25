<?php
// INI ADALAH BANK DATA FINAL DENGAN MATERI YANG SUPER LENGKAP DAN MENDALAM
$learning_data = [
    'malware' => [
        'title' => 'Ancaman Malware',
        'subtitle' => 'Dasar-Dasar, Jenis, dan Pencegahan',
        'icon' => 'fa-shield-virus',
        'chapters' => [
            1 => [
                'title' => 'Pengenalan & Jenis-Jenis Dasar',
                'lessons' => [
                    1 => ['type' => 'materi', 'title' => 'Apa itu Malware?', 'duration' => '4 menit', 'content' => "<h3>Definisi Mendalam Malware</h3><p>Malware, singkatan dari <strong>'malicious software'</strong> (perangkat lunak jahat), adalah istilah umum untuk semua jenis program yang dirancang dengan tujuan merugikan. Tujuan utamanya bisa beragam:</p><ul><li><strong>Mencuri Data:</strong> Mengambil informasi sensitif seperti password, nomor kartu kredit, atau data pribadi untuk dijual atau disalahgunakan.</li><li><strong>Merusak Sistem:</strong> Menghapus file, merusak sistem operasi, atau membuat perangkat Anda tidak bisa digunakan sama sekali.</li><li><strong>Mengganggu Pengguna:</strong> Menampilkan iklan yang tidak diinginkan secara terus-menerus (Adware).</li><li><strong>Menyediakan Akses Ilegal:</strong> Memberi peretas 'pintu belakang' untuk mengontrol perangkat Anda dari jarak jauh dan menjadikannya bagian dari 'pasukan zombie' (Botnet).</li></ul><p>Anggap saja malware sebagai istilah umum untuk semua 'penjahat digital' yang bisa masuk ke perangkat Anda.</p>"],
                    2 => ['type' => 'kuis', 'title' => 'Kuis: Definisi', 'duration' => '1 menit', 'question' => "Istilah 'Malware' merupakan singkatan dari...", 'options' => ["Mail-Software", "Malicious Software", "Main-Software"], 'answer' => 1 ],
                    3 => ['type' => 'materi', 'title' => 'Mengenal Virus dan Worm', 'duration' => '5 menit', 'content' => "<h3>Virus vs. Worm: Siapa Butuh Tumpangan?</h3><p>Meskipun sering dianggap sama, keduanya punya cara menyebar yang fundamentalnya berbeda:</p><blockquote><strong>Virus</strong> seperti penumpang gelap. Ia tidak bisa berjalan sendiri. Ia harus 'menempel' pada file atau program lain yang sah (disebut 'inang'), seperti file <code>.exe</code> atau dokumen Word. Saat Anda membuka file inang tersebut, virus baru akan aktif dan mulai menginfeksi file-file lain.</blockquote><blockquote><strong>Worm (Cacing)</strong> lebih mandiri dan berbahaya dalam penyebarannya. Ia seperti perampok yang punya mobil sendiri. Worm adalah program mandiri yang bisa mereplikasi (menggandakan) dirinya sendiri dan menyebar ke komputer lain melalui jaringan (internet/LAN) tanpa perlu campur tangan manusia atau menempel pada program lain.</blockquote>"],
                    4 => ['type' => 'kuis', 'title' => 'Kuis: Virus vs Worm', 'duration' => '2 menit', 'question' => "Jenis malware yang bisa menyebar sendiri melalui jaringan tanpa perlu program inang disebut...", 'options' => ["Virus", "Trojan", "Worm"], 'answer' => 2 ],
                ]
            ],
            2 => [
                'title' => 'Ancaman Populer Saat Ini',
                'lessons' => [
                    1 => ['type' => 'materi', 'title' => 'Trojan: Penipu dalam Selimut', 'duration' => '5 menit', 'content' => "<h3>Legenda Kuda Troya di Dunia Digital</h3><p>Sesuai namanya, <strong>Trojan</strong> adalah master penyamaran. Ia masuk ke sistem Anda dengan menyamar sebagai sesuatu yang sah dan berguna (misalnya, game gratis, aplikasi edit foto), namun di dalamnya tersembunyi program jahat. Saat Anda menjalankannya, Anda tanpa sadar telah membuka 'pintu gerbang' bagi program jahat yang tersembunyi di dalamnya.</p>"],
                    2 => ['type' => 'materi', 'title' => 'Ransomware: Sang Penyandera Digital', 'duration' => '6 menit', 'content' => "<h3>'Data Anda Terkunci, Bayar atau Hilang Selamanya!'</h3><p><strong>Ransomware</strong> adalah salah satu jenis malware paling merusak dan meresahkan. Cara kerjanya sangat kejam:</p><ol><li><strong>Infeksi:</strong> Masuk ke perangkat Anda, biasanya melalui email phishing atau software bajakan.</li><li><strong>Enkripsi:</strong> Secara diam-diam, ia akan mengenkripsi (mengunci dengan kode rahasia super rumit) semua file penting Anda—dokumen kerja, foto keluarga, video, database, dll.</li><li><strong>Pesan Tebusan:</strong> Sebuah pesan akan muncul di layar, memberitahu bahwa file Anda telah disandera dan Anda harus membayar sejumlah uang (biasanya dalam bentuk cryptocurrency seperti Bitcoin) untuk mendapatkan kunci pembukanya.</li></ol><p><strong>PENTING:</strong> Badan keamanan siber di seluruh dunia menyarankan untuk <strong>TIDAK MEMBAYAR TEBUSAN</strong>. Tidak ada jaminan file Anda akan kembali, dan itu hanya akan mendanai kegiatan kriminal mereka.</p>"],
                    3 => ['type' => 'kuis', 'title' => 'Kuis: Ransomware', 'duration' => '2 menit', 'question' => "Malware yang mengunci file dan meminta tebusan disebut...", 'options' => ["Spyware", "Ransomware", "Adware"], 'answer' => 1 ],
                ]
            ],
            3 => [
                'title' => 'Pencegahan & Penanganan Darurat',
                'lessons' => [
                    1 => ['type' => 'materi', 'title' => '5 Pilar Pencegahan Malware', 'duration' => '7 menit', 'content' => "<h3>Membangun Benteng Pertahanan</h3><p>Mencegah selalu lebih baik daripada mengobati. Berikut adalah 5 pilar utama untuk melindungi diri dari malware:</p><ol><li><strong>Gunakan Antivirus & Firewall:</strong> Anggap Antivirus sebagai satpam yang patroli di dalam rumah, dan Firewall sebagai tembok dan gerbang yang menyaring siapa yang boleh masuk. Gunakan keduanya dan pastikan selalu update.</li><li><strong>Waspada Saat Online:</strong> Jangan mengunduh file dari sumber yang tidak resmi atau situs bajakan. Ini adalah jalur utama penyebaran malware.</li><li><strong>Jangan Asal Klik:</strong> Waspada terhadap lampiran email atau link dari pengirim yang tidak dikenal. Verifikasi dulu sebelum mengklik apapun.</li><li><strong>Selalu Lakukan Update:</strong> 'Tambalan keamanan' (security patches) yang ada di setiap update sistem operasi (Windows, MacOS, Android) dan aplikasi (Chrome, Office) sangat krusial untuk menutup celah yang bisa dieksploitasi malware.</li><li><strong>Strategi Backup 3-2-1:</strong> Ini adalah jaring pengaman terakhir Anda melawan ransomware. Simpan <strong>3</strong> salinan data penting Anda, di <strong>2</strong> jenis media yang berbeda (misal: di laptop dan di hard disk eksternal), dengan <strong>1</strong> salinan berada di lokasi yang berbeda (off-site, seperti di cloud atau di rumah teman).</li></ol>"],
                    2 => ['type' => 'kuis', 'title' => 'Kuis: Pencegahan', 'duration' => '2 menit', 'question' => "Tindakan paling efektif untuk melindungi data dari kehilangan akibat serangan ransomware adalah...", 'options' => ["Memasang wallpaper baru", "Melakukan backup data rutin", "Membersihkan keyboard"], 'answer' => 1 ],
                ]
            ],
            4 => [
                'title' => 'Mata-Mata & Pengiklan Paksa',
                'lessons' => [
                    1 => ['type' => 'materi', 'title' => 'Spyware: Si Pengintai Aktivitas', 'duration' => '6 menit', 'content' => "<h3>Setiap Gerakanmu Diawasi</h3><p><strong>Spyware</strong> adalah jenis malware yang dirancang untuk 'memata-matai' Anda secara diam-diam. Setelah terpasang, ia bisa:</p><ul><li><strong>Merekam Ketikan (Keylogging):</strong> Mencatat semua yang Anda ketik, termasuk password, pesan pribadi, dan informasi kartu kredit.</li><li><strong>Mengambil Screenshot:</strong> Mengambil gambar layar Anda secara berkala.</li><li><strong>Memantau Aktivitas Web:</strong> Melihat situs apa saja yang Anda kunjungi.</li></ul><p>Data yang dicuri ini kemudian dikirim ke peretas untuk disalahgunakan, misalnya untuk penipuan atau pencurian identitas.</p>"],
                    2 => ['type' => 'materi', 'title' => 'Adware: Agresif & Mengganggu', 'duration' => '5 menit', 'content' => "<h3>Banjir Iklan yang Tak Diundang</h3><p><strong>Adware</strong> (Advertising-supported software) sebenarnya tidak selalu jahat, namun bisa menjadi sangat mengganggu dan membahayakan. Adware yang agresif akan:</p><ul><li>Menampilkan iklan pop-up yang tidak relevan secara terus-menerus.</li><li>Mengubah halaman utama (homepage) browser Anda.</li><li>Mengalihkan pencarian Anda ke situs web iklan.</li></ul><p>Bahayanya, banyak Adware yang juga menyisipkan Spyware di dalamnya (malvertising) atau mengarahkan Anda ke situs phishing.</p>"],
                    3 => ['type' => 'kuis', 'title' => 'Kuis: Spyware vs Adware', 'duration' => '2 menit', 'question' => "Malware yang fokus utamanya adalah mencuri informasi dengan merekam ketikan disebut...", 'options' => ["Adware", "Spyware", "Ransomware"], 'answer' => 1 ],
                ]
            ],
            5 => [
                'title' => 'Keamanan Proaktif & Masa Depan',
                'lessons' => [
                    1 => ['type' => 'materi', 'title' => 'Prinsip \'Least Privilege\'', 'duration' => '5 menit', 'content' => "<h3>Beri Akses Seperlunya Saja</h3><p>Prinsip 'Least Privilege' (Hak Istimewa Terkecil) adalah konsep keamanan fundamental. Artinya, jalankan program atau akun pengguna dengan hak akses seminimal mungkin yang diperlukan untuk bekerja.</p><p>Misalnya, jangan selalu menggunakan akun Administrator untuk pekerjaan sehari-hari di Windows. Gunakan akun standar. Ini akan sangat membatasi kemampuan malware untuk menginfeksi file sistem jika ia berhasil masuk.</p>"],
                    2 => ['type' => 'materi', 'title' => 'Analisis Perilaku (Behavioral Analysis)', 'duration' => '6 menit', 'content' => "<h3>Mengenali Gerak-Gerik Mencurigakan</h3><p>Antivirus modern tidak hanya bergantung pada database virus yang sudah dikenal. Mereka juga menggunakan <strong>Analisis Perilaku</strong>. Mereka akan mengawasi program yang berjalan dan mencari tindakan mencurigakan, seperti:</p><ul><li>Sebuah program tiba-tiba mencoba mengenkripsi banyak file (ciri Ransomware).</li><li>Sebuah aplikasi tiba-tiba mencoba mengakses webcam tanpa izin (ciri Spyware).</li></ul><p>Jika terdeteksi, antivirus akan segera memblokir program tersebut meskipun virusnya belum teridentifikasi secara resmi.</p>"],
                    3 => ['type' => 'kuis', 'title' => 'Kuis: Keamanan Proaktif', 'duration' => '2 menit', 'question' => "Menggunakan akun non-Administrator untuk aktivitas harian di komputer adalah penerapan dari prinsip...", 'options' => ["Backup 3-2-1", "Least Privilege", "Zero Trust"], 'answer' => 1 ],
                ]
            ]
        ]
    ],
    'phishing' => [
        'title' => 'Jebakan Phishing',
        'subtitle' => 'Rekayasa Sosial & Penipuan',
        'icon' => 'fa-fish',
        'chapters' => [
            1 => [
                'title' => 'Dasar-Dasar & Psikologi Phishing',
                'lessons' => [
                    1 => ['type' => 'materi', 'title' => 'Apa itu Phishing?', 'duration' => '4 menit', 'video_embed_url' => 'https://www.youtube.com/embed/o_m_03FjQyM', 'content' => "<h3>Seni Menipu Digital</h3><p>Phishing adalah serangan siber yang berfokus pada <strong>psikologi manusia</strong>, bukan pada peretasan teknis yang rumit. Pelaku (disebut phisher) mencoba 'memancing' Anda agar secara sukarela memberikan informasi sensitif.</p><p>Mereka melakukannya dengan cara menyamar sebagai pihak atau institusi tepercaya—misalnya bank, layanan e-commerce, bahkan teman atau atasan Anda—dan mengirimkan pesan palsu yang dirancang untuk terlihat asli.</p>"],
                    2 => ['type' => 'materi', 'title' => 'Psikologi di Balik Jebakan', 'duration' => '5 menit', 'content' => "<h3>Memanfaatkan Emosi Manusia</h3><p>Serangan phishing seringkali berhasil karena memanipulasi emosi dasar kita untuk membuat kita tidak berpikir jernih. Taktik yang umum digunakan adalah:</p><ul><li><strong>Menciptakan Rasa Takut & Urgensi:</strong> Pesan seperti 'Akun Anda akan ditutup dalam 24 jam!' atau 'Ada transaksi mencurigakan, segera verifikasi!' membuat kita panik dan ingin segera bertindak.</li><li><strong>Memicu Keserakahan:</strong> Notifikasi 'Selamat, Anda memenangkan undian sebesar Rp 50 Juta! Klaim hadiah Anda di sini!' menargetkan keinginan kita untuk mendapatkan sesuatu dengan mudah.</li><li><strong>Memanfaatkan Kepercayaan & Keingintahuan:</strong> Pesan dari 'teman' yang mengirim link aneh, atau subjek email yang membuat penasaran, seringkali menjadi umpan yang efektif.</li></ul>"],
                    3 => ['type' => 'kuis', 'title' => 'Kuis: Psikologi Phishing', 'duration' => '2 menit', 'question' => "Email yang berisi 'Segera klik link ini atau akun bank Anda akan diblokir!' memanfaatkan emosi apa?", 'options' => ["Keserakahan", "Kepanikan", "Penasaran"], 'answer' => 1 ],
                ]
            ],
            2 => [
                'title' => 'Anatomi & Varian Serangan',
                'lessons' => [
                    1 => ['type' => 'materi', 'title' => 'Anatomi Lengkap Email Phishing', 'duration' => '7 menit', 'video_embed_url' => 'https://www.youtube.com/embed/z1IIiP34g2E', 'content' => "<h3>Bongkar Kedok Penipu: Cek 5 Hal Ini!</h3><p>Jadilah seorang detektif setiap kali Anda menerima email yang mencurigakan. Periksa 5 hal ini secara teliti:</p><ol><li><strong>Alamat Pengirim (From):</strong> Jangan hanya lihat namanya, lihat alamat email lengkapnya. Apakah resmi? Email dari BCA tidak akan menggunakan domain <code>@gmail.com</code>. Perhatikan juga ejaan yang sengaja disalahkan, misal <code>admin@paypa1.com</code> (menggunakan angka 1 bukan L).</li><li><strong>Sapaan Generik:</strong> Waspada jika email penting menyapa Anda dengan 'Yth. Nasabah' atau 'Dear Customer', bukan nama lengkap Anda.</li><li><strong>Link yang Mencurigakan:</strong> Arahkan kursor mouse Anda ke atas link atau tombol (<strong>JANGAN DIKLIK!</strong>). Lihat alamat URL asli yang muncul di pojok kiri bawah browser. Jika alamatnya aneh (misal: <code>klik-disini-hadiah.xyz</code>), itu adalah link phishing.</li><li><strong>Tata Bahasa & Desain Buruk:</strong> Banyak pesan phishing yang memiliki tata bahasa aneh atau kualitas gambar yang rendah.</li><li><strong>Lampiran (Attachment) Berbahaya:</strong> Jangan pernah membuka lampiran yang tidak Anda harapkan, terutama file dengan ekstensi <code>.exe</code> atau <code>.zip</code>.</li></ol>"],
                    2 => ['type' => 'kuis', 'title' => 'Kuis: Deteksi Phishing', 'duration' => '2 menit', 'question' => "Cara terbaik untuk memeriksa keaslian sebuah link di email adalah dengan...", 'options' => ["Langsung mengkliknya untuk melihat isinya", "Mengarahkan mouse ke atasnya tanpa mengklik untuk melihat URL asli", "Menyalin dan menempelkannya di browser baru"], 'answer' => 1 ],
                    3 => ['type' => 'materi', 'title' => 'Smishing dan Vishing', 'duration' => '4 menit', 'content' => "<h3>Bukan Hanya Email</h3><p><strong>Smishing</strong> adalah phishing yang dilakukan melalui SMS. Contoh klasiknya adalah SMS 'Selamat Anda mendapatkan hadiah...'</p><p><strong>Vishing</strong> (Voice Phishing) adalah phishing melalui telepon, di mana penipu mencoba meyakinkan Anda untuk memberikan informasi melalui percakapan suara.</p>"],
                    4 => ['type' => 'materi', 'title' => 'Quishing: Jebakan di Balik QR Code', 'duration' => '4 menit', 'content' => "<h3>Jangan Asal Scan!</h3><p><strong>Quishing (QR Code Phishing)</strong> adalah teknik baru di mana pelaku menempel stiker QR code palsu di atas QR code yang asli (misalnya di tempat parkir). Saat Anda scan, Anda akan diarahkan ke situs web phishing untuk mencuri data.</p>"]
                ]
            ],
            3 => [
                'title' => 'Studi Kasus & Teknik Lanjutan',
                'lessons' => [
                    1 => ['type' => 'materi', 'title' => 'Studi Kasus: Undangan .apk', 'duration' => '5 menit', 'video_embed_url' => 'https://www.youtube.com/embed/f9tW5A4A5gA', 'content' => "<h3>Modus Paling Berbahaya</h3><p>Penipuan yang marak adalah mengirim file berekstensi <strong>.apk</strong> melalui WhatsApp dengan menyamar sebagai undangan pernikahan atau resi paket. Meng-install file ini akan memasang malware yang bisa mencuri SMS, termasuk kode OTP m-banking.</p><p><strong>PENTING:</strong> Jangan pernah install aplikasi dari luar sumber resmi.</p>"],
                    2 => ['type' => 'kuis', 'title' => 'Kuis: Modus APK', 'duration' => '2 menit', 'question' => "File dengan ekstensi apa yang sangat berbahaya jika dikirim via WhatsApp dari sumber tak dikenal?", 'options' => [".jpg (gambar)", ".pdf (dokumen)", ".apk (aplikasi)"], 'answer' => 2 ],
                    3 => ['type' => 'materi', 'title' => 'Spear Phishing & BEC', 'duration' => '5 menit', 'video_embed_url' => 'https://www.youtube.com/embed/rSLi4h_Pylg', 'content' => "<h3>Serangan Tertarget & Kelas Kakap</h3><p><strong>Spear Phishing</strong> adalah serangan yang sangat tertarget dan personal. Pelaku sudah meriset targetnya.</p><p><strong>Business Email Compromise (BEC)</strong> adalah jenis spear phishing yang menargetkan perusahaan, biasanya dengan menyamar sebagai CEO untuk meminta transfer dana.</p>"],
                    4 => ['type' => 'materi', 'title' => 'Langkah Verifikasi & Pelaporan', 'duration' => '4 menit', 'content' => "<h3>Jangan Langsung Percaya, Verifikasi & Laporkan!</h3><p>Mendapat pesan mencurigakan? Lakukan verifikasi dengan menelepon pihak terkait melalui nomor resmi. Jika Anda yakin itu phishing, gunakan fitur 'Laporkan Phishing' di email Anda untuk membantu melindungi pengguna lain.</p>"],
                ]
            ]
        ]
    ],
    'password' => [
        'title' => 'Kekuatan Password',
        'subtitle' => 'Kunci Digital & Keamanannya',
        'icon' => 'fa-key',
        'chapters' => [
            1 => [
                'title' => 'Fondasi Password yang Kokoh',
                'lessons' => [
                    1 => ['type' => 'materi', 'title' => 'Mengapa \'password123\' Berbahaya?', 'duration' => '4 menit', 'video_embed_url' => 'https://www.youtube.com/embed/r_o3-pGZ_iY', 'content' => "<h3>Anatomi Password Lemah</h3><p>Password seperti '123456' atau 'password' bisa dibobol dalam <strong>kurang dari satu detik</strong> oleh komputer modern. Peretas menggunakan program yang mencoba miliaran kombinasi per detik (Brute-force Attack).</p>"],
                    2 => ['type' => 'materi', 'title' => 'Prinsip Emas: Panjang > Rumit', 'duration' => '6 menit', 'video_embed_url' => 'https://www.youtube.com/embed/IduDkFdb_iI', 'content' => "<h3>Membuat Passphrase</h3><p>Prinsip modern adalah: <strong>panjang adalah kekuatan.</strong> Gunakan metode <strong>passphrase</strong>: gabungkan 4-5 kata acak yang tidak berhubungan, contoh: <code>kopi-pohon-baterai-jingga</code>. Ini sangat panjang, mudah diingat, namun super sulit ditebak.</p>"],
                    3 => ['type' => 'kuis', 'title' => 'Kuis: Kekuatan Password', 'duration' => '2 menit', 'question' => "Manakah password yang secara teori paling kuat?", 'options' => ["admin123!!", "Mei2025*", "meja-kuning-lari-pagi"], 'answer' => 2],
                    4 => ['type' => 'materi', 'title' => 'Hal-hal yang Harus Dihindari', 'duration' => '4 menit', 'content' => "<h3>Jangan Gunakan Informasi Pribadi!</h3><p>Hindari menggunakan informasi yang mudah ditebak dalam password Anda, seperti:</p><ul><li>Nama Anda, pasangan, anak, atau hewan peliharaan.</li><li>Tanggal lahir atau tanggal penting lainnya.</li><li>Pola keyboard yang mudah seperti <code>qwerty</code> atau <code>asdfgh</code>.</li><li>Mengganti huruf dengan simbol yang mirip (misal: 'a' menjadi '@') adalah taktik lama yang sudah mudah ditebak.</li></ul>"],
                ]
            ],
            2 => [
                'title' => 'Manajemen Password Modern',
                'lessons' => [
                    1 => ['type' => 'materi', 'title' => 'Bahaya Daur Ulang Password', 'duration' => '5 menit', 'content' => "<h3>Satu Kunci untuk Semua Pintu?</h3><p>Ini adalah kesalahan paling umum. Jika Anda menggunakan password yang sama untuk banyak akun, dan salah satu akun bocor, peretas bisa menggunakan kombinasi email dan password itu untuk membobol semua akun Anda yang lain. Serangan ini disebut <strong>Credential Stuffing</strong>.</p><blockquote>Aturan Wajib: <strong>Satu Akun, Satu Password Unik.</strong></blockquote>"],
                    2 => ['type' => 'materi', 'title' => 'Solusi Cerdas: Password Manager', 'duration' => '5 menit', 'video_embed_url' => 'https://www.youtube.com/embed/Xp32iGKO3fA', 'content' => "<h3>Gudang Password Pribadi Anda</h3><p>Mustahil mengingat puluhan password unik? Gunakan <strong>Password Manager</strong>. Aplikasi ini bekerja seperti brankas digital terenkripsi. Anda hanya perlu mengingat satu Master Password yang sangat kuat. Password Manager akan membuatkan password super kuat untuk setiap akun dan mengisinya secara otomatis.</p>"],
                    3 => ['type' => 'kuis', 'title' => 'Kuis: Manajemen Password', 'duration' => '2 menit', 'question' => "Alat bantu yang paling direkomendasikan untuk mengelola banyak password unik adalah...", 'options' => ["Buku catatan fisik", "File Microsoft Excel", "Password Manager"], 'answer' => 2],
                    4 => ['type' => 'materi', 'title' => 'Panduan Memilih Password Manager', 'duration' => '8 menit', 'content' => "<h3>Memilih Gudang Digital Terbaik Anda</h3><p>Menggunakan Password Manager adalah langkah paling signifikan untuk meningkatkan keamanan akun Anda. Tapi dengan banyaknya pilihan, mana yang terbaik? Berikut adalah panduan untuk memilihnya.</p><h4>1. Memahami Cara Kerjanya</h4><p>Anggap Password Manager sebagai brankas bank digital super aman (disebut <strong>encrypted vault</strong>). Semua password Anda disimpan di dalamnya dalam bentuk terenkripsi. Anda hanya perlu mengingat satu kunci untuk membuka brankas ini, yaitu <strong>Master Password</strong>. Karena ini adalah satu-satunya kunci, pastikan Master Password Anda sangat kuat dan unik!</p><h4>2. Kriteria Penting Saat Memilih</h4><ul><li><strong>Keamanan (Arsitektur Zero-Knowledge):</strong> Ini yang terpenting. Pilih penyedia yang menggunakan arsitektur 'zero-knowledge'. Artinya, hanya Anda yang bisa membuka brankas Anda dengan Master Password. Pihak perusahaan (misal: Bitwarden atau 1Password) sekalipun tidak bisa melihat isi password Anda, bahkan jika mereka mau.</li><li><strong>Kemudahan Penggunaan (User Experience):</strong> Cari yang memiliki antarmuka yang bersih, serta ekstensi browser (untuk PC/Laptop) dan aplikasi mobile (untuk HP) yang andal. Fitur <em>auto-fill</em> yang baik akan sangat memudahkan hidup Anda.</li><li><strong>Fitur Tambahan:</strong> Fitur seperti generator password, penyimpanan catatan aman (secure notes), dan kemampuan berbagi password dengan aman kepada keluarga atau tim adalah nilai tambah yang besar.</li><li><strong>Reputasi dan Audit Keamanan:</strong> Gunakan penyedia yang sudah dikenal luas dan secara rutin menjalani audit keamanan oleh pihak ketiga. Ini menunjukkan transparansi dan komitmen mereka terhadap keamanan.</li></ul><h4>3. Rekomendasi Populer (2025)</h4><blockquote><strong>Bitwarden:</strong> Pilihan terbaik bagi kebanyakan orang. Bersifat <strong>open-source</strong> (kodenya bisa diaudit siapa saja) dan menawarkan paket gratis yang sangat lengkap dan fungsional. Sangat direkomendasikan jika Anda baru memulai.</blockquote><blockquote><strong>1Password:</strong> Dianggap memiliki antarmuka pengguna (UI/UX) terbaik dan fitur untuk keluarga yang sangat baik. Ini adalah pilihan premium (berbayar) yang sangat populer karena kemudahannya.</blockquote><blockquote><strong>KeePass:</strong> Untuk pengguna tingkat lanjut yang menginginkan kontrol penuh. Ini adalah aplikasi offline di mana Anda menyimpan file brankas Anda sendiri (misalnya di komputer atau di Google Drive pribadi). Lebih rumit, tapi memberi Anda kendali 100% atas data Anda.</blockquote><p>Lakukan riset kecil Anda sendiri, tapi memulai dengan salah satu dari tiga ini adalah pilihan yang sangat aman dan tepat.</p>"],            
         ]
                ],
                // =================================================================
    // ===== MODUL BARU 1: REKAYASA SOSIAL (SOCIAL ENGINEERING) =====
    // =================================================================
    'rekayasa-sosial' => [
        'title' => 'Rekayasa Sosial',
        'subtitle' => 'Seni Memanipulasi Psikologi Manusia',
        'icon' => 'fa-theater-masks',
        'chapters' => [
            1 => [
                'title' => 'Memahami Manipulasi',
                'lessons' => [
                    1 => ['type' => 'materi', 'title' => 'Apa itu Rekayasa Sosial?', 'duration' => '5 menit', 'content' => "<h3>Bukan Sekadar Retas</h3><p>Rekayasa Sosial adalah seni memanipulasi, memengaruhi, atau menipu orang lain agar mereka memberikan informasi rahasia atau melakukan tindakan tertentu yang menguntungkan penyerang. Ini adalah serangan terhadap 'human-firewall', yaitu Anda.</p><p>Phishing, Vishing, dan Smishing sebenarnya adalah bagian dari Rekayasa Sosial.</p>"],
                    2 => ['type' => 'materi', 'title' => 'Studi Kasus: Penipuan CEO', 'duration' => '6 menit', 'content' => "<h3>Perintah Palsu dari 'Atasan'</h3><p>Seorang penipu melakukan riset dan mengetahui nama CEO dan Manajer Keuangan sebuah perusahaan. Ia kemudian membuat alamat email palsu yang sangat mirip dengan email CEO dan mengirimkan email ke Manajer Keuangan tersebut.</p><blockquote>Emailnya berisi: 'Saya sedang dalam rapat penting dan butuh Anda segera mentransfer dana sebesar Rp 100 Juta ke rekening vendor ini untuk proyek rahasia. Jangan bicarakan ini dengan siapa pun.'</blockquote><p>Karena merasa ini perintah mendesak dari atasan, sang manajer melakukan transfer tanpa verifikasi. Ini adalah contoh klasik Business Email Compromise (BEC), salah satu bentuk rekayasa sosial yang sangat merugikan.</p>"],
                    3 => ['type' => 'kuis', 'title' => 'Kuis: Konsep Dasar', 'duration' => '2 menit', 'question' => "Target utama dari serangan Rekayasa Sosial adalah...", 'options' => ["Kelemahan sistem operasi", "Psikologi dan emosi manusia", "Kabel jaringan"], 'answer' => 1 ],
                ]
            ],
        ]
    ],

    // =================================================================
    // ===== MODUL BARU 2: KEAMANAN JARINGAN DASAR =====
    // =================================================================
    'keamanan-jaringan' => [
        'title' => 'Keamanan Jaringan Dasar',
        'subtitle' => 'Mengamankan Koneksi Internet Anda',
        'icon' => 'fa-wifi',
        'chapters' => [
            1 => [
                'title' => 'Ancaman di Jaringan Publik',
                'lessons' => [
                    1 => ['type' => 'materi', 'title' => 'Bahaya Wi-Fi Publik', 'duration' => '5 menit', 'content' => "<h3>Koneksi Gratis, Risiko Mahal</h3><p>Wi-Fi gratis di kafe, bandara, atau hotel memang nyaman, tapi juga berbahaya. Jaringan ini seringkali tidak terenkripsi, artinya data yang Anda kirim (termasuk password atau data pribadi) bisa 'diintip' oleh siapa saja yang berada di jaringan yang sama. Serangan ini disebut <strong>Man-in-the-Middle (MITM)</strong>.</p>"],
                    2 => ['type' => 'materi', 'title' => 'Jebakan "Evil Twin"', 'duration' => '6 menit', 'content' => "<h3>Wi-Fi Kembar yang Jahat</h3><p>Penipu bisa membuat hotspot Wi-Fi palsu dengan nama yang sangat mirip dengan Wi-Fi asli (misal: 'KopiKenangan_FreeWiFi' vs 'KopiKenangan_WiFiGratis'). Ini disebut serangan <strong>Evil Twin</strong>.</p><p>Jika Anda salah terhubung ke jaringan palsu ini, semua lalu lintas internet Anda akan melewati perangkat peretas, memungkinkan mereka untuk mencuri semua data Anda.</p>"],
                    3 => ['type' => 'kuis', 'title' => 'Kuis: Evil Twin', 'duration' => '2 menit', 'question' => "Serangan di mana peretas membuat hotspot Wi-Fi palsu disebut...", 'options' => ["Evil Twin", "Man-in-the-Middle", "Trojan"], 'answer' => 0 ],
                ]
            ],
            2 => [
                'title' => 'Solusi & Praktik Terbaik',
                'lessons' => [
                    1 => ['type' => 'materi', 'title' => 'Gunakan VPN (Virtual Private Network)', 'duration' => '6 menit', 'content' => "<h3>Terowongan Aman Anda</h3><p>VPN adalah solusi terbaik saat menggunakan jaringan publik. VPN akan mengenkripsi semua lalu lintas data Anda, menciptakan 'terowongan' pribadi yang aman di dalam jaringan publik. Bahkan jika ada yang mengintip, mereka hanya akan melihat data acak yang tidak bisa dibaca.</p>"],
                    2 => ['type' => 'materi', 'title' => 'Mengamankan Wi-Fi Rumah', 'duration' => '5 menit', 'content' => "<h3>Jangan Lupakan Jaringan Pribadi</h3><p>Pastikan Wi-Fi di rumah Anda juga aman:</p><ul><li>Ganti password default dari router Anda.</li><li>Gunakan enkripsi WPA2 atau WPA3 (jangan WEP atau WPA).</li><li>Buat password Wi-Fi yang kuat dan unik.</li><li>Sembunyikan nama jaringan Anda (SSID) jika memungkinkan.</li></ul>"],
                    3 => ['type' => 'kuis', 'title' => 'Kuis: Solusi Terbaik', 'duration' => '2 menit', 'question' => "Teknologi yang menciptakan 'terowongan' aman di jaringan publik disebut...", 'options' => ["Antivirus", "Firewall", "VPN"], 'answer' => 2 ],
                ]
            ]
        ]
    ]
        ]
    ]
];