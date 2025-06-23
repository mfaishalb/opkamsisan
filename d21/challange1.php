<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Challenge 1 - Forensik Dasar</title>
  <style>
    body { font-family: Arial; padding: 20px; }
    .hint { display: none; margin-bottom: 5px; }
    button { margin-bottom: 5px; }
  </style>
</head>
<body>
  <a href="index.php">← Kembali ke daftar soal</a>
  <h1>Forensik Dasar 1</h1>
  <p><strong>Deskripsi Soal:</strong> File ini terlihat rusak, tapi ada sesuatu di dalamnya. Temukan flag tersembunyi.</p>

  <p><strong>File Soal:</strong> <a href="files/challenge1.zip" download>Download challenge1.zip</a></p>

  <div id="hints">
    <h3>Hints</h3>
    <button onclick="showHint(1)">Show Hint 1</button>
    <div id="hint1" class="hint">Coba lihat file header-nya.</div>

    <button onclick="showHint(2)">Show Hint 2</button>
    <div id="hint2" class="hint">Gunakan `binwalk` atau `foremost`.</div>

    <!-- Tambah sampai 10 -->
  </div>

  <hr>
  <h3>Submit Flag</h3>
  <form action="submit.php" method="post">
    <input type="hidden" name="id" value="1">
    <input type="text" name="flag" placeholder="STORM{...}" required>
    <button type="submit">Submit Flag</button>
  </form>
  <p id="result"></p>

  <script>
    function showHint(num) {
      document.getElementById(`hint${num}`).style.display = 'block';
    }

    function checkFlag(e) {
      e.preventDefault();
      const input = document.getElementById("flagInput").value;
      const correctFlag = "STORM{example_flag}";
      const result = document.getElementById("result");

      if (input === correctFlag) {
        result.textContent = "✅ Flag benar!";
        result.style.color = "green";
      } else {
        result.textContent = "❌ Salah.";
        result.style.color = "red";
      }
    }
  </script>
</body>
</html>
