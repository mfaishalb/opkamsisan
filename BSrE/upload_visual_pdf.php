<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Upload PDF & Visual Signature</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            border-left: 5px solid #3498db;
            padding-left: 10px;
        }

        input[type="file"] {
            display: block;
            margin: 10px 0 20px;
        }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #2980b9;
        }

        hr {
            margin: 40px 0;
            border: none;
            border-top: 1px solid #ccc;
        }

        @media (max-width: 600px) {
            .container {
                margin: 20px;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Upload PDF dan Gambar Tanda Tangan</h2>
    <form action="sign_visual_pdf.php" method="post" enctype="multipart/form-data">
        <label>File PDF:</label>
        <input type="file" name="pdf" accept="application/pdf" required>
        
        <label>Gambar Tanda Tangan (PNG/JPG):</label>
        <input type="file" name="ttd" accept="image/*" required>
        
        <button type="submit">Tandatangani PDF secara Visual + Digital</button>
    </form>

    <hr>

    <h2>Verifikasi Signature Digital PDF</h2>
    <form action="verify_pdf.php" method="post" enctype="multipart/form-data">
        <label>File PDF:</label>
        <input type="file" name="pdf" accept="application/pdf" required>
        
        <label>File Signature (.sig/.bin):</label>
        <input type="file" name="signature" required>
        
        <button type="submit">Verifikasi</button>
    </form>
</div>

</body>
</html>
