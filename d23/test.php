<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>CTF Forensik Edukasi</title>
  <style>
    body { font-family: Arial; padding: 20px; }
    .hint { display: none; margin-bottom: 5px; }
    button { margin-bottom: 5px; }
  </style>
</head>
<body>
  <h1>Challenge: Forensik Dasar 1</h1>
  <p>Soal: File ini terlihat rusak, tapi ada sesuatu di dalamnya. Temukan flag tersembunyi.</p>

  <div id="hints">
    <button onclick="showHint(1)">Show Hint 1</button>
    <div id="hint1" class="hint">Coba cek file header-nya.</div>

    <button onclick="showHint(2)">Show Hint 2</button>
    <div id="hint2" class="hint">Gunakan `binwalk` atau `foremost` untuk ekstraksi.</div>

    <button onclick="showHint(3)">Show Hint 3</button>
    <div id="hint3" class="hint">Ada embedded file dalam file utama.</div>

    <!-- Tambahkan sampai hint 10 -->
  </div>

  <hr>
  <h3>Submit Jawaban</h3>
  <form onsubmit="checkFlag(event)">
    <input type="text" id="flagInput" placeholder="STORM{...}" required>
    <button type="submit">Submit</button>
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
        result.textContent = "✅ Flag benar! Selamat!";
        result.style.color = "green";
      } else {
        result.textContent = "❌ Salah, coba lagi.";
        result.style.color = "red";
      }
    }
  </script>
</body>
</html>
