You said:
<!DOCTYPE html>
<html>
<head>
    <title>Simulasi Sertifikasi Modul Kriptografi</title>
    <style>
        body {
            background-color: #0f0f0f;
            font-family: 'Courier New', monospace;
            color: #00ff99;
            padding: 40px;
            margin: 0;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
        }

        h2, h3 {
            color: #00ffcc;
            border-left: 5px solid #00ff99;
            padding-left: 10px;
        }

        form, .hasil {
            background-color: #1a1a1a;
            border: 1px solid #00ff99;
            padding: 20px;
            box-shadow: 0 0 15px #00ff99;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        input[type="text"], select, input[type="submit"], input[type="file"] {
            background-color: #0d0d0d;
            border: 1px solid #00ffcc;
            color: #00ffcc;
            padding: 10px;
            width: 100%;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #00ff99;
            color: #000;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #00cc77;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #00ffee;
        }

        .status {
            font-weight: bold;
            color: #00ff99;
            font-size: 18px;
        }

        .gagal {
            font-weight: bold;
            color: #ff4444;
            font-size: 18px;
        }

        .hasil p {
            margin: 8px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>🧪 Simulasi Sertifikasi Modul Kriptografi</h2>

    <form method="post" enctype="multipart/form-data">
        <h3>📌 FASE 1: Data Modul</h3>
        <label>Nama Modul:</label>
        <input type="text" name="modul" required>

        <label>Vendor:</label>
        <input type="text" name="vendor" required>

        <label>Jenis Modul:</label>
        <select name="jenis">
            <option value="Software">Software</option>
            <option value="Hardware">Hardware</option>
            <option value="Firmware">Firmware</option>
        </select>

        <h3>🔐 FASE 2: Validasi Algoritma</h3>
        <label>Algoritma yang Digunakan:</label>
        <select name="algoritma">
            <option value="AES">AES</option>
            <option value="RSA">RSA</option>
            <option value="SHA-256">SHA-256</option>
            <option value="MD5">MD5 (deprecated)</option>
        </select>

        <h3>🔑 FASE 3: Manajemen Kunci</h3>
        <label>Apakah kunci disimpan terenkripsi?</label>
        <select name="simpan_kunci">
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>

        <label>Apakah ada proses penghapusan kunci otomatis (zeroization)?</label>
        <select name="zeroization">
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>

        <h3>📦 FASE 4: Uji Boundary</h3>
        <label>Apakah boundary kriptografi terdokumentasi?</label>
        <select name="boundary">
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>

        <h3>📄 FASE 5: Dokumentasi Teknis</h3>
        <label>Apakah dokumentasi lengkap sesuai standar?</label>
        <select name="dokumen">
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>

        <h3>📁 FASE 6: Upload Modul</h3>
        <label>Unggah file modul kriptografi (.zip, .jar, .pem):</label>
        <input type="file" name="modul_file" required>

        <input type="submit" value="💼 Uji Sertifikasi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $modul = htmlspecialchars($_POST['modul']);
        $vendor = htmlspecialchars($_POST['vendor']);
        $jenis = $_POST['jenis'];
        $algoritma = $_POST['algoritma'];
        $simpan_kunci = $_POST['simpan_kunci'];
        $zeroization = $_POST['zeroization'];
        $boundary = $_POST['boundary'];
        $dokumen = $_POST['dokumen'];

        $alg_valid = in_array($algoritma, ['AES', 'RSA', 'SHA-256']);
        $lulus_kunci = ($simpan_kunci == "ya" && $zeroization == "ya");
        $lulus_boundary = ($boundary == "ya");
        $lulus_dokumen = ($dokumen == "ya");

        $file_ok = false;
        $file_info = "";
        $has_crypto_box = false;
        $has_zeroization = false;

        if (isset($_FILES['modul_file']) && $_FILES['modul_file']['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES['modul_file'];
            $ext_allowed = ['zip', 'jar', 'pem'];
            $file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            $file_size = $file['size'];

            if (in_array($file_ext, $ext_allowed) && $file_size <= 5 * 1024 * 1024) {
                $file_ok = true;
                $file_hash = hash_file('sha256', $file['tmp_name']);
                $content = file_get_contents($file['tmp_name']);

                if (stripos($content, 'sodium_crypto_box') !== false) {
                    $has_crypto_box = true;
                }
                if (preg_match('/(\$keypair\s*=\s*null|\$secretkey\s*=\s*null)/', $content)) {
                    $has_zeroization = true;
                }

                $file_info = "
                    <p><strong>Nama File:</strong> {$file['name']}</p>
                    <p><strong>Ukuran:</strong> " . round($file_size / 1024, 2) . " KB</p>
                    <p><strong>SHA-256:</strong> {$file_hash}</p>
                    <p><strong>Deteksi crypto_box:</strong> " . ($has_crypto_box ? "✅ Ditemukan" : "❌ Tidak Ditemukan") . "</p>
                    <p><strong>Deteksi Zeroization:</strong> " . ($has_zeroization ? "✅ Ditemukan" : "❌ Tidak Ditemukan") . "</p>
                ";
            } else {
                $file_info = "<p class='gagal'>❌ File tidak valid (harus .zip/.jar/.pem dan max 5MB)</p>";
            }
        } else {
            $file_info = "<p class='gagal'>❌ Gagal mengunggah file.</p>";
        }

        if ($alg_valid && $lulus_kunci && $lulus_boundary && $lulus_dokumen && $file_ok) {
            $hasil = "✅ MODUL LULUS SERTIFIKASI";
            $class = "status";
        } else {
            $hasil = "❌ MODUL GAGAL SERTIFIKASI";
            $class = "gagal";
        }

        echo "<div class='hasil'>";
        echo "<h3>📋 Hasil Sertifikasi untuk $modul</h3>";
        echo "<p><strong>Vendor:</strong> $vendor</p>";
        echo "<p><strong>Jenis Modul:</strong> $jenis</p>";
        echo "<p><strong>Algoritma:</strong> $algoritma (" . ($alg_valid ? "Valid" : "Tidak Valid") . ")</p>";
        echo "<p><strong>Manajemen Kunci:</strong> " . ($lulus_kunci ? "Aman" : "Tidak Aman") . "</p>";
        echo "<p><strong>Cryptographic Boundary:</strong> " . ($lulus_boundary ? "Terdokumentasi" : "Tidak Terdokumentasi") . "</p>";
        echo "<p><strong>Dokumentasi:</strong> " . ($lulus_dokumen ? "Lengkap" : "Tidak Lengkap") . "</p>";
        echo "<h4>📁 Informasi File Modul:</h4>";
        echo $file_info;
        echo "<p class='$class'>$hasil</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>