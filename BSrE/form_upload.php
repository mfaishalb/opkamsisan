<?php
// Form upload PDF, tanda tangan, dan input nama
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Upload PDF & Tanda Tangan Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { background: #f8f9fa; font-family: 'Segoe UI', Arial, sans-serif; margin: 0; padding: 0; }
        .container { max-width: 420px; background: #fff; margin: 40px auto; padding: 32px 28px 20px 28px; border-radius: 16px; box-shadow: 0 8px 32px rgba(60,60,120,0.1), 0 1.5px 3px rgba(0,0,0,0.06);}
        h2 { margin-top: 0; color: #2b4162; font-weight: 600; letter-spacing: 1px; }
        form { margin-bottom: 18px; }
        label { display: block; margin-bottom: 6px; font-weight: 500; color: #3e3e3e; }
        input[type="file"], input[type="text"] { width: 100%; margin-bottom: 18px; padding: 7px 6px; border-radius: 5px; border: 1px solid #d0d7e7; box-sizing: border-box; }
        .btn { background: linear-gradient(90deg, #4357b2, #2b4162); color: #fff; border: none; border-radius: 6px; padding: 10px 20px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: background 0.2s; box-shadow: 0 3px 10px rgba(60,60,120,0.08);}
        .btn:hover { background: linear-gradient(90deg, #2b4162, #4357b2); }
        .note { font-size: 0.95em; color: #6b7687; margin-bottom: 20px; }
        hr { border: none; border-top: 1px solid #e3e6ee; margin: 28px 0 14px 0; }
        @media (max-width: 520px) { .container { max-width: 98vw; padding: 16px 4vw; } }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload PDF & Tanda Tangan</h2>
        <div class="note">
            Format file tanda tangan: <b>PNG/JPG</b><br>
            <span style="font-size: 90%">PDF akan diberi tanda tangan visual + digital signature RSA</span>
        </div>
        <form action="sign_visual_pdf.php" method="post" enctype="multipart/form-data">
            <label for="nama">Nama Penandatangan</label>
            <input type="text" name="nama" id="nama" required placeholder="Nama Penandatangan">
            <label for="pdf">File PDF</label>
            <input type="file" name="pdf" id="pdf" accept="application/pdf" required>
            <label for="ttd">Gambar Tanda Tangan</label>
            <input type="file" name="ttd" id="ttd" accept="image/png, image/jpeg, image/jpg, image/gif" required>
            <button type="submit" class="btn">Tandatangani PDF</button>
        </form>
        <hr>
        <h2 style="font-size:1.2em;margin-top:16px;">Verifikasi Signature Digital</h2>
        <form action="verify_pdf.php" method="post" enctype="multipart/form-data">
            <label for="pdfv">File PDF</label>
            <input type="file" name="pdf" id="pdfv" accept="application/pdf" required>
            <label for="sigv">File Signature (.bin)</label>
            <input type="file" name="signature" id="sigv" required>
            <label for="namav">File Nama Penandatangan (.txt)</label>
            <input type="file" name="namafile" id="namav" accept=".txt" required>
            <button type="submit" class="btn">Verifikasi</button>
        </form>
    </div>
</body>
</html>