<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>CTF Forensik Edukasi</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 30px; }
    h1 { text-align: center; }
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 40px;
    }
    .card {
      border: 2px solid #333;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      transition: 0.3s;
      background-color: #f4f4f4;
    }
    .card:hover {
      background-color: #ddd;
      cursor: pointer;
    }
    a { text-decoration: none; color: inherit; }
  </style>
</head>
<body>
  <h1>CTF Forensik Edukasi</h1>
  <div class="grid">
    <a href="challange1.php"><div class="card">Forensik Dasar 1</div></a>
    <a href="challange2.php"><div class="card">Forensik Dasar 2</div></a>
    <a href="challange3.php"><div class="card">Forensik Dasar 3</div></a>
  </div>
</body>
</html>
