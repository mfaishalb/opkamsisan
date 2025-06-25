<?php
// Bagian PHP di atas untuk mengambil data dari database tetap sama
// Ini hanya contoh, pastikan bagian PHP Anda yang sudah ada tetap dipertahankan
include 'db.php';
session_start(); // Jika Anda menggunakan sistem login, pastikan ini ada

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: challenges.php");
    exit();
}
$id = intval($_GET['id']);
$stmt = $conn->prepare("SELECT title, description, file_path, file_name FROM challenges WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows === 0) {
    header("Location: challenges.php");
    exit();
}
$challenge = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Misi: <?php echo htmlspecialchars($challenge['title']); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <canvas id="background-canvas"></canvas>

  <div class="container my-5">
    <a href="challenges.php" class="back-link"><< Kembali ke Daftar Tantangan</a>
    <h1 class="display-4 text-center"><?php echo htmlspecialchars($challenge['title']); ?></h1>

    <div class="challenge-box mt-4">
      <h3>// BRIEFING MISI</h3>
      <p><?php echo htmlspecialchars($challenge['description']); ?></p>

      <?php if (!empty($challenge['file_path'])): ?>
        <p class="mt-3"><strong>// FILE BARANG BUKTI</strong></p>
        <a href="<?php echo htmlspecialchars($challenge['file_path']); ?>" class="btn btn-outline-primary" download>Download <?php echo htmlspecialchars($challenge['file_name']); ?></a>
      <?php endif; ?>
    </div>

    <div class="challenge-box mt-4">
  <h3>// HINTS</h3>
  <button type="button" class="btn-hint" onclick="showHintModal('Hint 1', 'Kamu cuma dapat gambar biasa. Tapi apakah benar hanya itu isinya?')">Minta Hint 1</button>

  <button type="button" class="btn-hint" onclick="showHintModal('Hint 2', 'Coba gunakan perintah `strings` atau buka di hex editor. Ada sesuatu tersembunyi di dalamnya.')">Minta Hint 2</button>

  <button type="button" class="btn-hint" onclick="showHintModal('Hint 3', 'Flag biasanya dimulai dengan `picoCTF{...}`. Cari pola itu dalam hex atau dump string-nya.')">Minta Hint 3</button>
</div>


    <div class="challenge-box mt-4">
        <h3>// SUBMIT FLAG</h3>
        <form id="submitForm">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="input-group">
                <input type="text" class="form-control bg-dark text-light border-primary" name="flag" id="flagInput" placeholder="STORM{...}" required>
                <button type="submit" class="btn btn-primary">Kirim Sinyal</button>
            </div>
        </form>
        <p id="result" class="mt-3"></p>
    </div>
  </div>

  <div class="modal fade" id="hintModal" tabindex="-1" aria-labelledby="hintModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background-color: var(--card-bg); border-color: var(--bs-primary);">
        <div class="modal-header" style="border-bottom-color: var(--bs-border-color);">
          <h5 class="modal-title text-primary" id="hintModalLabel">Judul Hint</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="hintModalBody">
          Isi hint akan muncul di sini...
        </div>
        <div class="modal-footer" style="border-top-color: var(--bs-border-color);">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>


  <script src="js/background.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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