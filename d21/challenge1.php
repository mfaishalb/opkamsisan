<?php
include 'db.php';

// Validasi ID soal dari URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = intval($_GET['id']);

// Ambil detail soal dari database
$stmt = $conn->prepare("SELECT title, description, file_path, file_name FROM challenges WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    // Soal tidak ditemukan
    header("Location: index.php");
    exit();
}

$challenge = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Misi: <?php echo htmlspecialchars($challenge['title']); ?></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <canvas id="background-canvas"></canvas>

  <div class="container">
    <a href="index.php" class="back-link"><< Kembali ke Main Hub</a>
    <h1><?php echo htmlspecialchars($challenge['title']); ?></h1>

    <div class="challenge-box">
      <h3>// BRIEFING MISI</h3>
      <p><?php echo htmlspecialchars($challenge['description']); ?></p>

      <?php if (!empty($challenge['file_path']) && !empty($challenge['file_name'])): ?>
        <p><strong>// FILE BARANG BUKTI</strong></p>
        <a href="<?php echo htmlspecialchars($challenge['file_path']); ?>" class="btn-link" download>Download <?php echo htmlspecialchars($challenge['file_name']); ?></a>
      <?php endif; ?>
    </div>

    <div class="challenge-box mt-4">
  <h3>// HINTS</h3>
  <button type="button" class="btn-hint" onclick="showHintModal('Hint 1', 'File ini gambar, tapi sepertinya ada data tersembunyi di balik warna tertentu.')">Minta Hint 1</button>

  <button type="button" class="btn-hint" onclick="showHintModal('Hint 2', 'Gunakan `zsteg` untuk mengecek apakah ada yang disisipkan lewat channel warna (R/G/B).')">Minta Hint 2</button>

  <button type="button" class="btn-hint" onclick="showHintModal('Hint 3', 'Hati-hati dengan data base64. Jangan buru-buru decode—pahami dulu dari mana asalnya.')">Minta Hint 3</button>
</div>



    <hr style="border-color: var(--border-color);">

    <div class="challenge-box">
        <h3>// SUBMIT FLAG</h3>
        <form id="submitForm">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="flag" id="flagInput" placeholder="STORM{...}" required>
            <button type="submit">Kirim Sinyal</button>
        </form>
        <p id="result"></p>
    </div>

  </div>

  <script src="js/background.js"></script>
  <script>
    // Fungsi untuk menampilkan modal hint
    function showHintModal(title, body) {
        document.getElementById('hintModalLabel').textContent = title;
        document.getElementById('hintModalBody').textContent = body;
        var hintModal = new bootstrap.Modal(document.getElementById('hintModal'));
        hintModal.show();
    }

    // Fungsi untuk submit flag (AJAX)
    document.getElementById('submitForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const form = e.target;
        const formData = new FormData(form);
        const resultElement = document.getElementById('result');
        resultElement.textContent = 'Mengirim sinyal...';
        resultElement.className = 'text-white-50';

        fetch('submit.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            resultElement.textContent = data.message;
            if (data.status === 'success') {
                resultElement.className = 'text-success'; // Menggunakan class Bootstrap
            } else {
                resultElement.className = 'text-danger'; // Menggunakan class Bootstrap
            }
        })
        .catch(error => {
            console.error('Error:', error);
            resultElement.textContent = 'Terjadi gangguan transmisi.';
            resultElement.className = 'text-danger';
        });
    });
  </script>
</body>
</html>