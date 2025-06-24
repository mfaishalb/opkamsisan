<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Tantangan - CTF Edukasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <canvas id="background-canvas"></canvas>

  <div class="container my-5"> <a href="index.php" class="back-link"><< Kembali ke Halaman Utama</a>
    <h1 class="display-4 text-center">DAFTAR TANTANGAN</h1>
    <p class="text-center text-white-50">Pilih misi untuk memulai analisis...</p>

    <div class="row g-4 mt-4"> <?php
        include 'db.php';
        $result = $conn->query("SELECT id, title FROM challenges ORDER BY id ASC");
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Menggunakan kolom grid Bootstrap
                echo '<div class="col-lg-4 col-md-6">';
                // Menggunakan komponen Card Bootstrap
                echo '  <a href="challenge.php?id=' . $row["id"] . '" class="text-decoration-none">';
                echo '    <div class="card h-100 card-challenge">'; // Tambah class kustom
                echo '      <div class="card-body text-center">';
                echo '        <h5 class="card-title text-primary stretched-link"> >> ' . htmlspecialchars($row["title"]) . '</h5>';
                echo '      </div>';
                echo '    </div>';
                echo '  </a>';
                echo '</div>';
            }
        } else {
            echo "<p class='text-center'>Belum ada soal yang tersedia.</p>";
        }
        $conn->close();
      ?>
    </div>
  </div>

  <script src="js/background.js"></script>
  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>