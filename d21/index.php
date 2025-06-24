<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>...</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <canvas id="background-canvas"></canvas>

  <div class="main-container">
    <div class="hero-section">
      <h1>Selamat Datang, Pejuang Siber!</h1>
      <p>Asah kemampuanmu, pecahkan tantangan, dan jadilah legenda di dunia keamanan siber.</p>
      <a href="challenges.php" class="btn-hero">Mulai Tantangan</a>
    </div>

    <div class="info-section hidden-on-load">
      <h2>Apa itu Capture The Flag (CTF)?</h2>
      <p>
        Capture The Flag (CTF) adalah sebuah kompetisi keamanan siber yang dirancang seperti permainan. Peserta ditantang untuk memecahkan berbagai macam masalah keamanan digital untuk menemukan sebuah "bendera" (flag) tersembunyi. Flag ini biasanya berupa sepotong teks dengan format tertentu, misalnya <code>STORM{ini_adalah_contoh_flag}</code>. Ini adalah cara yang seru dan praktis untuk belajar dan menguji kemampuan dalam dunia peretasan etis (*ethical hacking*).
      </p>

      <h2>Mengapa Kamu Harus Mencoba CTF?</h2>
      <p>
        Belajar teori keamanan siber itu penting, tapi mempraktikkannya adalah hal yang benar-benar akan mengasah kemampuanmu. CTF adalah "gym" bagi para pegiat keamanan siber. Ini adalah arena legal dan aman untuk mencoba berbagai teknik, berpikir kreatif, dan belajar dari kesalahan tanpa konsekuensi dunia nyata.
      </p>

      <h2>Kelebihan Mengikuti CTF</h2>
      <ul>
        <li><strong>Penerapan Ilmu:</strong> Mengubah pengetahuan teoritis menjadi skill praktis.</li>
        <li><strong>Belajar Hal Baru:</strong> Setiap tantangan seringkali mengenalkanmu pada teknik, tools, atau celah keamanan baru.</li>
        <li><strong>Melatih Pola Pikir:</strong> Mengembangkan kemampuan analisis dan *problem-solving* yang sangat tajam.</li>
        <li><strong>Komunitas:</strong> Terhubung dengan orang-orang yang memiliki minat yang sama.</li>
        <li><strong>Portofolio Karir:</strong> Prestasi di CTF bisa menjadi nilai tambah yang besar di CV Anda saat melamar pekerjaan di bidang keamanan siber.</li>
      </ul>

      <h2>Kategori Umum dalam CTF</h2>
      <p>Berikut adalah beberapa kategori tantangan yang sering muncul dalam kompetisi CTF:</p>
      <ul>
        <li><strong>Forensik Digital:</strong> Menganalisis barang bukti digital seperti file gambar, rekaman memori (RAM), atau lalu lintas jaringan (pcap) untuk menemukan informasi tersembunyi.</li>
        <li><strong>Kriptografi:</strong> Memecahkan pesan atau data yang telah dienkripsi menggunakan berbagai macam algoritma dan teknik sandi.</li>
        <li><strong>Web Exploitation:</strong> Mencari dan mengeksploitasi celah keamanan pada sebuah situs web, seperti SQL Injection, Cross-Site Scripting (XSS), dll.</li>
      </ul>
    </div>
  </div>
  
  <script src="js/background.js"></script>
  <script src="js/script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>