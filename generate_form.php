<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Generate RSA Key Pair</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>🔐 Buat Kunci RSA</h1>
    <form action="generate_keys.php" method="post">
        <label for="bits">Ukuran Kunci (bit):</label>
        <select name="bits" required>
            <option value="1024">1024</option>
            <option value="2048" selected>2048</option>
            <option value="4096">4096</option>
        </select>
        <button type="submit">🔑 Buat Kunci</button>
    </form>
</div>
</body>
</html>
