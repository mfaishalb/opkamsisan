<?php
if (
    $_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_FILES['pdf']) &&
    isset($_FILES['signature']) &&
    isset($_FILES['namafile'])
) {
    $pdfTmp = $_FILES['pdf']['tmp_name'];
    $sigTmp = $_FILES['signature']['tmp_name'];
    $namaTmp = $_FILES['namafile']['tmp_name'];

    $pdfData = file_get_contents($pdfTmp);
    $signature = file_get_contents($sigTmp);
    $nama = htmlspecialchars(trim(file_get_contents($namaTmp)));

    $publicKeyFile = 'public.pem';
    if (!file_exists($publicKeyFile)) {
        die('File public.pem tidak ditemukan!');
    }
    $publicKey = file_get_contents($publicKeyFile);
    $pkeyid = openssl_pkey_get_public($publicKey);

    $result = openssl_verify($pdfData, $signature, $pkeyid, OPENSSL_ALGO_SHA256);

    if ($result === 1) {
        // TAMPILAN MENARIK UNTUK HASIL VALID
        echo <<<HTML
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Verifikasi Berhasil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(120deg, #e0eafc 0%, #cfdef3 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .result-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 6px 32px rgba(72,110,255,0.11), 0 1.5px 3px rgba(60,60,120,0.08);
            padding: 42px 38px 30px 38px;
            max-width: 440px;
            width: 100%;
            text-align: center;
            animation: fadeInUp 0.7s cubic-bezier(.18,.89,.32,1.28);
        }
        @keyframes fadeInUp {
            0% { transform: translateY(40px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
        .icon-success {
            font-size: 56px;
            color: #2ecc71;
            margin-bottom: 7px;
            filter: drop-shadow(0 2px 6px #e8ffe8);
        }
        h2 {
            color: #26476d;
            font-size: 1.48em;
            margin-bottom: 10px;
            font-weight: 700;
            letter-spacing: 0.7px;
        }
        .info {
            font-size: 1.06em;
            color: #39495e;
            margin-bottom: 28px;
            margin-top: 16px;
        }
        .signer {
            color: #1d81c7;
            font-weight: 600;
        }
        .back-btn {
            display: inline-block;
            margin-top: 10px;
            background: linear-gradient(90deg, #3498db, #2e71b6);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 11px 32px 11px 18px;
            font-size: 1em;
            font-weight: 500;
            text-decoration: none;
            position: relative;
            box-shadow: 0 2px 12px rgba(52,152,219,.09);
            transition: background .18s;
        }
        .back-btn:before {
            content: "←";
            position: absolute;
            left: 16px;
            font-size: 1.2em;
        }
        .back-btn:hover {
            background: linear-gradient(90deg, #2e71b6, #3498db);
        }
        @media (max-width: 530px) {
            .result-card { padding: 22px 7vw 18px 7vw; }
            h2 { font-size: 1.14em; }
        }
    </style>
</head>
<body>
    <div class="result-card">
        <div class="icon-success">✔</div>
        <h2>TANDA TANGAN DIGITAL VALID</h2>
        <div class="info">
            PDF ini <b>belum dimodifikasi</b> dan telah ditandatangani secara sah oleh:<br>
            <span class="signer">{$nama}</span>
        </div>
        <a href="form_upload.php" class="back-btn">Kembali</a>
    </div>
</body>
</html>
HTML;
    } elseif ($result === 0) {
        // GANTI DENGAN TAMPILAN ERROR MENARIK
        echo <<<HTML
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Verifikasi Gagal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {min-height:100vh; margin:0; font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif; background:linear-gradient(120deg,#fbeee6 0%,#f7cac9 100%); display:flex; align-items:center; justify-content:center;}
        .result-card {background:#fff; border-radius:18px; box-shadow:0 6px 32px rgba(255,110,80,0.12), 0 1.5px 3px rgba(60,60,120,0.08); padding:42px 38px 30px 38px; max-width:440px; width:100%; text-align:center;}
        .icon-fail {font-size:56px; color:#e74c3c; margin-bottom:7px; filter:drop-shadow(0 2px 6px #ffeaea);}
        h2 {color:#a82a2a; font-size:1.41em; margin-bottom:10px; font-weight:700;}
        .info {font-size:1.06em; color:#624848; margin-bottom:26px; margin-top:16px;}
        .back-btn {display:inline-block; margin-top:10px; background:linear-gradient(90deg, #d35400, #e67e22); color:#fff; border:none; border-radius:8px; padding:11px 32px 11px 18px; font-size:1em; font-weight:500; text-decoration:none; position:relative; box-shadow:0 2px 12px rgba(241,196,15,.11); transition:background .18s;}
        .back-btn:before {content:"←"; position:absolute; left:16px; font-size:1.2em;}
        .back-btn:hover {background:linear-gradient(90deg, #e67e22, #d35400);}
        @media (max-width:530px) {.result-card {padding:22px 7vw 18px 7vw;} h2 {font-size:1.12em;}}
    </style>
</head>
<body>
    <div class="result-card">
        <div class="icon-fail">✘</div>
        <h2>TANDA TANGAN DIGITAL TIDAK VALID</h2>
        <div class="info">
            PDF <b>sudah dimodifikasi</b> atau signature digital tidak cocok.<br>
            Mohon cek kembali file PDF dan signature-nya!
        </div>
        <a href="form_upload.php" class="back-btn">Kembali</a>
    </div>
</body>
</html>
HTML;
    } else {
        echo "<p>Terjadi error saat verifikasi.</p><a href=\"form_upload.php\">Kembali</a>";
    }
} else {
    header("Location: form_upload.php");
    exit;
}