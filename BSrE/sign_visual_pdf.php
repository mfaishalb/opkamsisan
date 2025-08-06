=<?php
require_once('vendor/autoload.php');

use setasign\Fpdi\Fpdi;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['pdf']) && isset($_FILES['ttd']) && isset($_POST['nama'])) {
    // Simpan file PDF upload ke lokasi sementara
    $pdfTmp = $_FILES['pdf']['tmp_name'];
    $pdfName = $_FILES['pdf']['name'];
    $pdfExt = strtolower(pathinfo($pdfName, PATHINFO_EXTENSION));
    if ($pdfExt !== 'pdf') {
        die('File yang diunggah harus PDF.');
    }
    $tmpPdfPath = 'uploaded_pdf_' . uniqid() . '.pdf';
    move_uploaded_file($pdfTmp, $tmpPdfPath);

    // Simpan file gambar tanda tangan dengan ekstensi yang benar
    $ttdTmp = $_FILES['ttd']['tmp_name'];
    $ttdInfo = getimagesize($ttdTmp);
    if ($ttdInfo === false) {
        die('File tanda tangan harus berupa gambar (JPG, PNG, GIF).');
    }
    $mime = $ttdInfo['mime'];
    $ext = '';
    switch ($mime) {
        case 'image/jpeg': $ext = '.jpg'; break;
        case 'image/png':  $ext = '.png'; break;
        case 'image/gif':  $ext = '.gif'; break;
        default: die('Tipe gambar tidak didukung. Hanya JPG, PNG, GIF.');
    }
    $tmpTtdPath = 'uploaded_signature_' . uniqid() . $ext;
    move_uploaded_file($ttdTmp, $tmpTtdPath);

    // Ambil nama penandatangan
    $nama = htmlspecialchars($_POST['nama']);

    // Tambahkan visual signature ke PDF (FPDI)
    $pdf = new FPDI();
    $pageCount = $pdf->setSourceFile($tmpPdfPath);

    for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
        $tplIdx = $pdf->importPage($pageNo);
        $size = $pdf->getTemplateSize($tplIdx);

        $pdf->AddPage($size['orientation'], [$size['width'], $size['height']]);
        $pdf->useTemplate($tplIdx);

        // Tanda tangan visual hanya di halaman terakhir
        if ($pageNo === $pageCount) {
            $signWidth = 40;
            $signHeight = 20;
            $margin = 20;
            $pdf->Image($tmpTtdPath, $size['width'] - $signWidth - $margin, $size['height'] - $signHeight - $margin, $signWidth, $signHeight);

            // Nama & tanggal di bawah tanda tangan
            $pdf->SetFont('Arial', '', 10);
            $pdf->SetXY($size['width'] - $signWidth - $margin, $size['height'] - $signHeight - $margin - 8);
            $pdf->Cell($signWidth, 8, 'Ditandatangani oleh: ' . $nama, 0, 0, 'C');
            $pdf->SetXY($size['width'] - $signWidth - $margin, $size['height'] - $signHeight - $margin + $signHeight);
            $pdf->Cell($signWidth, 8, 'Tanggal: ' . date('Y-m-d H:i'), 0, 0, 'C');
        }
    }

    // Simpan PDF hasil visual signing
    $outputFile = 'signed_visual_' . time() . '.pdf';
    $pdf->Output('F', $outputFile);

    // Digital signature dengan RSA
    $pdfData = file_get_contents($outputFile);

    // Baca private key
    $privateKeyFile = 'private.pem';
    if (!file_exists($privateKeyFile)) {
        die('File private.pem tidak ditemukan!');
    }
    $privateKey = file_get_contents($privateKeyFile);
    $pkeyid = openssl_pkey_get_private($privateKey);
    if (!$pkeyid) {
        die('Gagal membaca private key.');
    }

    // Buat signature digital (SHA256 + RSA)
    openssl_sign($pdfData, $signature, $pkeyid, OPENSSL_ALGO_SHA256);

    // Simpan signature ke file .bin
    $sigFile = 'signature_' . time() . '.bin';
    file_put_contents($sigFile, $signature);

    // Simpan nama penandatangan ke file .txt dengan nama sama
    $namaFile = basename($sigFile, '.bin') . '.txt';
    file_put_contents($namaFile, $nama);

    // Hapus file sementara
    unlink($tmpPdfPath);
    unlink($tmpTtdPath);

    // Output ke user
    echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title>PDF Bertanda Tangan</title>
    <style>
        body { font-family: Segoe UI,Arial,sans-serif; background:#f8f9fa; }
        .container { max-width:420px; background:#fff; margin:40px auto; padding:32px 28px 20px 28px; border-radius:16px; box-shadow:0 8px 32px rgba(60,60,120,0.1), 0 1.5px 3px rgba(0,0,0,0.06);}
        a { display:block; margin:14px 0; color:#4357b2; text-decoration:none; }
        .btn {display:inline-block; background:linear-gradient(90deg,#4357b2,#2b4162); color:#fff; border:none; border-radius:6px; padding:10px 20px; font-size:1rem; font-weight:600; cursor:pointer;}
    </style></head><body>
        <div class='container'>
        <h2>Berhasil!</h2>
        <p>PDF telah ditandatangani secara visual & digital.</p>
        <a href='$outputFile' class='btn' download>Download PDF Bertanda Tangan</a>
        <a href='$sigFile' class='btn' download>Download Signature Digital (.bin)</a>
        <a href='$namaFile' class='btn' download>Download Nama Penandatangan (.txt)</a>
        <a href='form_upload.php'>&laquo; Kembali ke Form</a>
        </div></body></html>";
} else {
    header("Location: form_upload.php");
    exit;
}