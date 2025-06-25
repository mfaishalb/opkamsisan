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
    function showHint(num) {
      document.getElementById(`hint${num}`).style.display = 'block';
    }

    document.getElementById('submitForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Mencegah form dari refresh halaman

        const form = e.target;
        const formData = new FormData(form);
        const resultElement = document.getElementById('result');

        resultElement.textContent = 'Mengirim sinyal...';
        resultElement.className = '';

        fetch('submit.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        // ...
.then(data => {
    if (data.status === 'success') {
        const formElement = document.getElementById('submitForm');
        const inputElement = document.getElementById('flagInput');
        
        // Nonaktifkan input dan tambahkan animasi
        inputElement.disabled = true;
        formElement.classList.add('success-anim');
        
        // Hapus pesan "Mengirim sinyal..."
        resultElement.className = 'success';
        resultElement.textContent = ''; 

        // Tampilkan pesan sukses dengan efek ketik
        typeEffect(resultElement, data.message, 50);

    } else {
        // Jika gagal, tampilkan pesan error seperti biasa
        resultElement.textContent = data.message;
        resultElement.className = 'error';
    }
})
// ...

// Jangan lupa tambahkan fungsi typeEffect di dalam <script> di challenge.php
// atau pastikan ia terhubung dari script.js
function typeEffect(element, text, speed = 75) {
    let i = 0;
    element.innerHTML = "";
    function typing() {
        if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
            setTimeout(typing, speed);
        }
    }
    typing();
}
        .catch(error => {
            console.error('Error:', error);
            resultElement.textContent = 'Terjadi gangguan transmisi.';
            resultElement.className = 'error';
        });
    });
  </script>
</body>
</html>