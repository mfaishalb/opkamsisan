<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Simulasi Sertifikasi Keamanan Produk</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
  <style>
    /* Import font dari Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');

    :root {
      /* Meng-override variabel warna default Bootstrap */
      --bs-body-font-family: 'VT323', monospace;
      --bs-body-bg: #0a0a14;
      --bs-body-color: #e0e0e0;
      --bs-primary: #00ffcc;
      --bs-primary-rgb: 0, 255, 204;
      --bs-border-color: #2a2a4a;
      
      /* Variabel kustom kita tetap bisa digunakan */
      --primary-color: #00ffcc;
      --background-color: #0a0a14;
      --text-color: #e0e0e0;
      --card-bg: #1a1a2e;
      --glow-color: rgba(0, 255, 204, 0.5);
      --success-color: #4dff88;
      --error-color: #ff4d4d; /* Menambahkan variabel error untuk konsistensi */
      --bs-success: var(--success-color);
    }

    body {
      background-color: var(--bs-body-bg);
      font-family: var(--bs-body-font-family);
      color: var(--bs-body-color);
      font-size: 1.2rem;
      margin: 0;
      padding: 0;
    }

    .main-container {
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
      background-color: rgba(10, 10, 20, 0.8);
      border: 1px solid var(--border-color);
      box-shadow: 0 0 20px var(--glow-color);
      position: relative;
      z-index: 1;
    }

    .hero-section {
      text-align: center;
      margin-bottom: 30px;
    }

    .hero-section h1 {
        font-size: 3rem;
        color: var(--primary-color);
        text-shadow: 0 0 5px var(--primary-color), 0 0 10px var(--glow-color);
        letter-spacing: 3px;
        animation: flicker 1.5s infinite alternate;
    }

    .hero-section p {
        font-size: 1.5rem;
        color: var(--text-color);
    }
    
    @keyframes flicker {
      0%, 18%, 22%, 25%, 53%, 57%, 100% {
        text-shadow:
          0 0 4px var(--primary-color),
          0 0 11px var(--primary-color),
          0 0 19px var(--primary-color),
          0 0 40px var(--glow-color),
          0 0 80px var(--glow-color);
      }
      20%, 24%, 55% {
        text-shadow: none;
      }
    }

    .form-group {
      margin-bottom: 20px;
    }
    
    label {
        display: block;
        margin-bottom: 10px;
        color: var(--primary-color);
    }

    textarea {
      width: 100%;
      height: 200px;
      padding: 10px;
      background-color: var(--card-bg);
      border: 1px solid var(--primary-color);
      border-radius: 4px;
      resize: vertical;
      color: var(--text-color);
      font-family: 'VT323', monospace;
      font-size: 1.2rem;
    }
    
    input[type="file"] {
        background-color: transparent;
        border: 1px solid var(--primary-color);
        color: var(--text-color);
        padding: 10px;
        font-family: 'VT323', monospace;
        font-size: 1.2rem;
        width: 100%;
        cursor: pointer;
    }
    
    /* Custom styling for file input button text */
    input[type="file"]::file-selector-button {
        background-color: transparent;
        border: 1px solid var(--primary-color);
        color: var(--primary-color);
        padding: 10px 15px;
        font-family: 'VT323', monospace;
        font-size: 1.2rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    input[type="file"]::file-selector-button:hover {
        background-color: var(--primary-color);
        color: var(--background-color);
    }

    button {
      background-color: transparent;
      border: 1px solid var(--primary-color);
      color: var(--primary-color);
      padding: 10px 15px;
      font-family: 'VT323', monospace;
      font-size: 1.2rem;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-right: 10px;
      margin-bottom: 10px;
    }

    button:hover {
      background-color: var(--primary-color);
      color: var(--background-color);
      box-shadow: 0 0 10px var(--glow-color);
    }

    .result {
      padding: 15px;
      margin-top: 20px;
      border-radius: 4px;
      display: none;
      font-size: 1.3rem;
      border: 1px dashed var(--border-color);
      background-color: var(--card-bg);
    }

    .result.visible {
      display: block !important;
      opacity: 1;
      transform: translateY(0);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .result.success {
      color: var(--success-color);
      border-color: var(--success-color);
    }
    
    .result.success p.safe {
        color: var(--success-color);
    }

    .result.error {
      color: var(--error-color);
      border-color: var(--error-color);
    }

    .result.error p.unsafe, .result.error li {
        color: var(--error-color);
    }
    
    .result ul {
        list-style-type: '>> ';
        padding-left: 30px;
    }

    .result li {
        padding-left: 10px;
        margin-bottom: 10px;
    }

  </style>
</head>
<body>
  <div class="main-container">
    <section class="hero-section">
      <h1>Simulasi Sertifikasi Keamanan Produk</h1>
      <p>Unggah atau tempel kode PHP untuk mendeteksi kerentanan (SQL Injection & IDOR).</p>
    </section>

    <form id="submitForm">
      <div class="form-group">
        <label for="fileInput">Unggah File:</label>
        <input type="file" id="fileInput" accept=".php,.txt" onchange="loadFile()">
      </div>

      <div class="form-group">
        <label for="codeInput">Atau tempel kode di sini:</label>
        <textarea id="codeInput" placeholder="$query = 'SELECT * FROM users WHERE id = $_GET[\'id\']';"></textarea>
      </div>

      <button type="button" onclick="analyzeCode()">🔍 Analisis Kode</button>
      <button type="button" onclick="generatePDF()">📄 Generate Laporan</button>
      <button type="button" onclick="generateCertificate()">🎖️ Generate Sertifikat</button>
    </form>

    <div id="result" class="result"></div>
  </div>

  <script>
    let analysisResult = '';

    function loadFile() {
      const fileInput = document.getElementById('fileInput');
      const codeInput = document.getElementById('codeInput');
      
      if (fileInput.files.length === 0) {
        return;
      }

      const file = fileInput.files[0];
      const reader = new FileReader();
      
      reader.onload = function(e) {
        codeInput.value = e.target.result;
      };
      
      reader.onerror = function() {
        alert('Gagal membaca file. Pastikan file berupa teks (PHP atau TXT).');
      };
      
      reader.readAsText(file);
    }

    function analyzeCode() {
      const code = document.getElementById('codeInput').value;
      const resultDiv = document.getElementById('result');
      let issues = [];

      // Pola yang lebih akurat untuk SQL Injection
      const sqliPatterns = [
        /(SELECT|INSERT|UPDATE|DELETE|DROP|CREATE|ALTER)[\s\S]*?\$_(GET|POST|REQUEST|COOKIE)/i,
        /(mysql_query|mysqli_query|pg_query|sqlite_query)\s*\(.*?\$_(GET|POST|REQUEST)/i,
        /\$sql\s*=\s*["'].*?\$_(GET|POST|REQUEST)/i,
        /WHERE\s+[\w`]+\s*=\s*['"]?.*?\$_(GET|POST|REQUEST)/i,
        /--\s*\$_(GET|POST|REQUEST)/i
      ];

      // Pola yang lebih akurat untuk IDOR
      const idorPatterns = [
          /\$_(GET|POST|REQUEST|COOKIE|SESSION)\[[\"']?(id|user_id|uid|account_id|file_id|doc_id|profile_id)[\"']?\]/i,
          /(file_get_contents|fopen|readfile|include|require)\s*\(.*?\$_(GET|POST|REQUEST|COOKIE|SESSION)\[[\"']?(id|file|path|page)[\"']?\]/i,
      ];

      // Reset previous classes
      resultDiv.classList.remove('success', 'error', 'visible');

      // Cek SQL Injection
      sqliPatterns.forEach(pattern => {
        if (pattern.test(code)) {
          const matches = code.match(new RegExp(pattern.source, 'i')); // ensure we get a match object
          if(matches && !issues.some(i => i.includes('SQL Injection'))){
            issues.push(`🚨 Ditemukan potensi SQL Injection pada: ${matches[0].substring(0, 60)}${matches[0].length > 60 ? '...' : ''}`);
          }
        }
      });
      
      // Cek IDOR
      idorPatterns.forEach(pattern => {
        if (pattern.test(code)) {
          const matches = code.match(new RegExp(pattern.source, 'i')); // ensure we get a match object
          if(matches && !issues.some(i => i.includes('IDOR'))){
            issues.push(`⚠️ Ditemukan potensi IDOR pada: ${matches[0].substring(0, 60)}${matches[0].length > 60 ? '...' : ''}`);
          }
        }
      });

      // Format hasil
      if (issues.length === 0) {
        resultDiv.innerHTML = '<p class="safe">✅ Tidak ditemukan kerentanan yang terdeteksi. Produk LAYAK disertifikasi.</p>';
        resultDiv.classList.add('success');
        analysisResult = 'LAYAK';
      } else {
        resultDiv.innerHTML = '<p class="unsafe">❌ Kerentanan ditemukan:</p><ul>' + 
          issues.map(i => `<li>${i}</li>`).join('') + '</ul>';
        resultDiv.classList.add('error');
        analysisResult = 'TIDAK LAYAK';
      }

      // Make the result visible with a slight delay for the animation
      setTimeout(() => {
        resultDiv.classList.add('visible');
      }, 100);
    }

    function generatePDF() {
        if (!analysisResult) {
            alert('Silakan analisis kode terlebih dahulu.');
            return;
        }

      const { jsPDF } = window.jspdf;
      const doc = new jsPDF({ unit: 'mm', format: 'A4' });
      const marginLeft = 20;
      const lineHeight = 10;
      let y = 20;

      const date = new Date().toLocaleDateString('id-ID');
      const decision = analysisResult === 'LAYAK' ? 'SERTIFIKAT KEAMANAN PRODUK: LAYAK' : 'SERTIFIKAT KEAMANAN PRODUK: TIDAK LAYAK';

      doc.setFont('Helvetica', 'bold');
      doc.setFontSize(14);
      doc.text('LAPORAN EVALUASI KEAMANAN PRODUK', doc.internal.pageSize.getWidth() / 2, y, { align: 'center' });
      y += lineHeight * 2;

      doc.setFontSize(12);
      doc.setFont('Helvetica', 'normal');
      doc.text(`Nama Produk         : Web Pemeriksa Keamanan Source Code`, marginLeft, y); y += lineHeight;
      doc.text(`Tanggal Evaluasi    : ${date}`, marginLeft, y); y += lineHeight;
      doc.text(`Evaluator           : Sistem Otomatis Simulasi Pusertif`, marginLeft, y); y += lineHeight * 2;

      doc.setFont('Helvetica', 'bold');
      doc.text('Hasil Analisis:', marginLeft, y); y += lineHeight;

      doc.setFont('Helvetica', 'normal');
      if (analysisResult === 'LAYAK') {
        doc.text('- Tidak ditemukan kerentanan SQL Injection atau IDOR.', marginLeft + 5, y); y += lineHeight;
        doc.text('- Rekomendasi: Lanjut ke tahap implementasi dan deployment.', marginLeft + 5, y); y += lineHeight;
      } else {
        const issuesText = document.getElementById('result').innerText.replace('❌ Kerentanan ditemukan:', '').trim();
        doc.text('- Terdeteksi satu atau lebih kerentanan keamanan:', marginLeft + 5, y); y += lineHeight;
        doc.text(issuesText, marginLeft + 10, y, { maxWidth: 170 });
        y += 20; // add more space for vulnerability details
        doc.text('- Rekomendasi: Lakukan perbaikan pada kode sumber.', marginLeft + 5, y); y += lineHeight;
        doc.text('  Terapkan validasi input dan kontrol akses yang sesuai.', marginLeft + 5, y); y += lineHeight;
      }

      y += lineHeight;
      doc.setFontSize(13);
      doc.setFont('Helvetica', 'bold');
      doc.text(decision, doc.internal.pageSize.getWidth() / 2, y, { align: 'center' }); y += lineHeight * 3;

      doc.setFontSize(10);
      doc.setFont('Helvetica', 'normal');
      doc.text('Dikeluarkan oleh:', marginLeft, y); y += lineHeight;
      doc.text('Pusat Sertifikasi Keamanan Informasi (Simulasi)', marginLeft, y); y += lineHeight;
      doc.text('Nomor Sertifikat: SIM-SEC-001/2025', marginLeft, y);

      doc.save('Laporan_Sertifikasi.pdf');
    }

    function generateCertificate() {
      if (analysisResult !== 'LAYAK') {
        alert('Sertifikat hanya dapat dihasilkan jika produk dinyatakan LAYAK.');
        return;
      }

      const { jsPDF } = window.jspdf;
      const doc = new jsPDF({ orientation: 'landscape', unit: 'mm', format: 'A4' });
      const date = new Date().toLocaleDateString('id-ID');

      // Dark background
      doc.setFillColor(10, 10, 20); // --background-color
      doc.rect(0, 0, 297, 210, 'F');

      // Title
      doc.setTextColor(0, 255, 204); // --primary-color
      doc.setFont('VT323', 'bold'); // Using the custom font
      doc.setFontSize(30);
      doc.text('SERTIFIKAT KEAMANAN PRODUK', 148.5, 40, { align: 'center' });

      // Body text
      doc.setTextColor(224, 224, 224); // --text-color
      doc.setFont('VT323', 'normal');
      doc.setFontSize(18);
      doc.text('Dengan ini menyatakan bahwa:', 148.5, 65, { align: 'center' });

      // Product Name
      doc.setFont('VT323', 'bold');
      doc.setFontSize(24);
      doc.text('Web Pemeriksa Keamanan Source Code', 148.5, 85, { align: 'center' });

      doc.setFont('VT323', 'normal');
      doc.setFontSize(16);
      doc.text('Telah memenuhi kriteria evaluasi keamanan dan dinyatakan:', 148.5, 105, { align: 'center' });

      // Status
      doc.setFontSize(28);
      doc.setFont('VT323', 'bold');
      doc.setTextColor(77, 255, 136); // --success-color
      doc.text('LAYAK DISERTIFIKASI', 148.5, 125, { align: 'center' });

      // Footer
      doc.setTextColor(224, 224, 224);
      doc.setFont('VT323', 'normal');
      doc.setFontSize(14);
      doc.text(`Tanggal Dikeluarkan: ${date}`, 148.5, 150, { align: 'center' });
      doc.text('Nomor Sertifikat: SIM-SEC-001/2025', 148.5, 160, { align: 'center' });
      doc.text('Pusat Sertifikasi Keamanan Informasi (Simulasi)', 148.5, 175, { align: 'center' });

      doc.save('Sertifikat_Keamanan.pdf');
    }
  </script>
</body>
</html>