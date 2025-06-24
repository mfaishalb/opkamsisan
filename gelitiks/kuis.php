<?php
session_start();
// Bank Soal Lengkap
$questions = [
    ['question' => "Anda menerima email dari 'noreply@bnk-bca.com' yang meminta verifikasi data. Apa tanda bahaya utama di sini?", 'options' => ["Nama pengirim 'noreply'", "Meminta verifikasi data", "Alamat email 'bnk-bca.com' yang salah eja", "Email dikirim di luar jam kerja"], 'answer' => 2, 'explanation' => "Alamat email resmi tidak akan menggunakan ejaan yang salah. 'bnk-bca.com' adalah contoh klasik domain palsu yang mencoba meniru 'bca.co.id' atau domain resmi lainnya."],
    ['question' => "Manakah metode Autentikasi Dua Faktor (2FA) yang paling rentan terhadap serangan SIM Swap?", 'options' => ["Aplikasi Authenticator (Google/Authy)", "Kunci Keamanan Fisik (YubiKey)", "Kode verifikasi yang dikirim via SMS", "Sidik jari (biometrik)"], 'answer' => 2, 'explanation' => "2FA via SMS paling rentan karena jika penipu berhasil mengambil alih nomor HP Anda melalui SIM Swap, semua kode OTP akan masuk ke perangkat mereka."],
    ['question' => "Anda mengunduh sebuah software 'gratis' dari situs tidak resmi. Setelah diinstal, laptop menjadi sangat lambat dan penuh iklan. Jenis malware apa yang paling mungkin menginfeksi?", 'options' => ["Worm", "Trojan yang membawa Adware/Spyware", "Ransomware", "Virus Boot Sector"], 'answer' => 1, 'explanation' => "Trojan adalah malware yang menyamar sebagai program sah (seperti software gratis). Seringkali, 'bonus' yang ia bawa adalah Adware (untuk iklan) dan Spyware (untuk memata-matai)."],
    ['question' => "Prinsip 'Panjang Lebih Baik dari Rumit' paling relevan saat membuat...", 'options' => ["PIN ATM", "Password Akun Online", "Kode OTP", "Username"], 'answer' => 1, 'explanation' => "Untuk password, sebuah 'passphrase' yang panjang (misal: 'kuda-terbang-makan-donat-ungu') jauh lebih sulit dipecahkan oleh komputer daripada password pendek yang rumit seperti 'PsWd!@#$'."],
    ['question' => "Saat berada di Wi-Fi publik (misal: bandara), apa langkah pengamanan terbaik sebelum melakukan transaksi perbankan?", 'options' => ["Menggunakan mode Incognito di browser", "Memastikan situsnya menggunakan HTTPS", "Menggunakan koneksi VPN (Virtual Private Network)", "Mematikan Bluetooth"], 'answer' => 2, 'explanation' => "VPN akan mengenkripsi semua lalu lintas data Anda, menciptakan 'terowongan' aman di dalam jaringan publik yang tidak aman. HTTPS penting, tapi VPN memberikan lapisan perlindungan yang jauh lebih komprehensif."],
    ['question' => "Seorang teman di media sosial tiba-tiba mengirim pesan berisi link aneh dengan tulisan 'Hei, lihat video memalukanmu di sini!'. Ini adalah contoh dari...", 'options' => ["Serangan Ransomware", "Rekayasa Sosial (Social Engineering)", "Serangan Brute Force", "Malware Trojan"], 'answer' => 1, 'explanation' => "Rekayasa Sosial adalah seni memanipulasi psikologi seseorang (rasa penasaran, panik, takut) untuk membuat mereka melakukan tindakan yang tidak aman, seperti mengklik link berbahaya."],
    ['question' => "Apa fungsi utama dari melakukan backup data dengan strategi 3-2-1?", 'options' => ["Membuat komputer lebih cepat", "Memastikan selalu ada salinan data yang selamat jika terjadi bencana atau serangan ransomware", "Menghemat ruang penyimpanan di hard disk utama", "Agar bisa berbagi file dengan mudah"], 'answer' => 1, 'explanation' => "Tujuan utama backup adalah pemulihan data. Jika perangkat utama rusak atau data dikunci oleh ransomware, Anda masih memiliki salinan aman di tempat lain."],
    ['question' => "Anda menemukan USB flash drive di toilet kantor. Tindakan paling bijak adalah...", 'options' => ["Mencolokkannya ke komputer pribadi untuk melihat isinya", "Mencolokkannya ke komputer kantor yang sudah ada antivirus", "Menyerahkannya ke bagian keamanan atau IT tanpa mencolokkannya sama sekali", "Memformatnya agar bisa digunakan sendiri"], 'answer' => 2, 'explanation' => "USB drive yang tidak dikenal bisa saja berisi malware yang akan otomatis berjalan (autorun) saat dicolokkan. Ini adalah metode serangan klasik yang disebut 'USB Drop Attack'."],
    ['question' => "Password Manager membantu meningkatkan keamanan dengan cara...", 'options' => ["Membuat semua password menjadi sama agar mudah diingat", "Menyimpan password dalam file teks di desktop", "Memungkinkan penggunaan password yang sangat kuat dan unik untuk setiap akun", "Menyembunyikan ikon aplikasi di HP"], 'answer' => 2, 'explanation' => "Kekuatan utama Password Manager adalah kemampuannya untuk membuat dan mengingat puluhan password yang panjang, acak, dan unik untuk setiap situs, sesuatu yang hampir tidak mungkin dilakukan oleh manusia."],
    ['question' => "Anda melihat gembok HTTPS di address bar browser. Apa artinya?", 'options' => ["Situs web ini 100% aman dari semua jenis serangan", "Situs web ini dimiliki oleh pemerintah", "Koneksi antara browser Anda dan server situs web ini terenkripsi", "Situs web ini tidak memiliki iklan"], 'answer' => 2, 'explanation' => "HTTPS (Hypertext Transfer Protocol Secure) memastikan bahwa data yang Anda kirim dan terima dari situs tersebut dienkripsi, sehingga tidak bisa 'diintip' oleh pihak ketiga di tengah jalan. Ini tidak menjamin situsnya sendiri bebas dari malware atau phishing."],
];
$total_questions = count($questions);
if (isset($_GET['action']) && $_GET['action'] == 'start_over') {
    unset($_SESSION['current_question'], $_SESSION['score'], $_SESSION['answered_questions'], $_SESSION['quiz_in_progress']);
    header('Location: kuis.php');
    exit();
}
if (!isset($_SESSION['quiz_in_progress'])) {
    $_SESSION['current_question'] = 0;
    $_SESSION['score'] = 0;
    $_SESSION['answered_questions'] = [];
    $_SESSION['quiz_in_progress'] = true;
}
$show_result_for_question = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] == 'submit_answer') {
        $user_answer_index = (int)($_POST['answer'] ?? -1);
        $current_question_index = $_SESSION['current_question'];
        if(isset($questions[$current_question_index])) {
            $correct_answer_index = $questions[$current_question_index]['answer'];
            if ($user_answer_index === $correct_answer_index) {
                if (!isset($_SESSION['answered_questions'][$current_question_index])) {
                    $_SESSION['score']++;
                }
            }
            $_SESSION['answered_questions'][$current_question_index] = $user_answer_index;
        }
    } elseif ($_POST['action'] == 'next_question') {
        $_SESSION['current_question']++;
    }
    header('Location: kuis.php');
    exit();
}
$current_question_index = $_SESSION['current_question'] ?? 0;
$is_quiz_finished = ($current_question_index >= $total_questions);
if (isset($_SESSION['answered_questions'][$current_question_index])) {
    $show_result_for_question = true;
    $user_answer_index = $_SESSION['answered_questions'][$current_question_index];
    $correct_answer_index = $questions[$current_question_index]['answer'];
}
if ($is_quiz_finished) {
    unset($_SESSION['quiz_in_progress']);
}
$progress_percentage = $total_questions > 0 ? ($current_question_index / $total_questions) * 100 : 0;
if($is_quiz_finished) $progress_percentage = 100;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis Utama - GELITIKS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="page-background">
    <div class="custom-cursor-dot"></div>
    <div class="custom-cursor-circle"></div>
    <canvas id="matrix-canvas"></canvas>
    <nav>
        <div class="container">
            <a href="index.php" class="logo"><img src="logo-gelitiks.png" alt="" class="logo-icon"><span>GELITIKS</span></a>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="kuis.php" class="active">Kuis Utama</a></li>
            </ul>
        </div>
    </nav>
    <main class="container" style="display: flex; align-items: center; justify-content: center; flex-grow: 1; padding-top: 60px; padding-bottom: 60px;">
        <div id="quiz-container">
            <?php if (!$is_quiz_finished) : ?>
                <div class="quiz-content-wrapper">
                    <div class="quiz-header">
                        <div class="progress-bar-quiz"><div class="progress-bar-quiz-inner" style="width: <?php echo $progress_percentage; ?>%;"></div></div>
                        <p id="question-counter">Pertanyaan <?php echo $current_question_index + 1; ?> dari <?php echo $total_questions; ?></p>
                        <p id="question-text"><?php echo htmlspecialchars($questions[$current_question_index]['question']); ?></p>
                    </div>
                    <?php if (!$show_result_for_question): ?>
                        <form id="quiz-form" method="POST" action="kuis.php">
                            <input type="hidden" name="action" value="submit_answer">
                            <div id="options-container">
                                <?php foreach ($questions[$current_question_index]['options'] as $index => $option) : ?>
                                    <label class="option-label"><input type="radio" name="answer" value="<?php echo $index; ?>" required><span><?php echo htmlspecialchars($option); ?></span></label>
                                <?php endforeach; ?>
                            </div>
                            <button type="submit" id="submit-btn">Periksa Jawaban</button>
                        </form>
                    <?php else: ?>
                        <div id="options-container">
                            <?php foreach ($questions[$current_question_index]['options'] as $index => $option) : 
                                $class = 'option-label-result'; $icon = '';
                                if ($index === $correct_answer_index) { $class .= ' correct'; $icon = '<i class="fas fa-check-circle"></i>'; } 
                                elseif ($index === $user_answer_index) { $class .= ' incorrect'; $icon = '<i class="fas fa-times-circle"></i>'; }
                            ?>
                                <div class="<?php echo $class; ?>"><span><?php echo htmlspecialchars($option); ?></span><span class="result-icon"><?php echo $icon; ?></span></div>
                            <?php endforeach; ?>
                        </div>
                        <div class="explanation-box">
                            <h4><i class="fas fa-lightbulb"></i> Penjelasan</h4>
                            <p><?php echo htmlspecialchars($questions[$current_question_index]['explanation']); ?></p>
                        </div>
                        <form method="POST" action="kuis.php">
                            <input type="hidden" name="action" value="next_question">
                            <button type="submit" id="submit-btn"><?php echo (($current_question_index + 1) >= $total_questions) ? 'Lihat Hasil Akhir' : 'Lanjut →'; ?></button>
                        </form>
                    <?php endif; ?>
                </div>
            <?php else : ?>
                <div id="result-container">
                    <?php
                        $score = $_SESSION['score'] ?? 0;
                        $percentage = $total_questions > 0 ? ($score / $total_questions) : 0;
                        $rank_title = "Digital Recruit"; $rank_class = "recruit"; $rank_icon = "fa-user-shield";
                        if ($percentage > 0.4) { $rank_title = "Cyber Agent"; $rank_class = "agent"; $rank_icon = "fa-user-secret"; }
                        if ($percentage > 0.7) { $rank_title = "Digital Sentinel"; $rank_class = "sentinel"; $rank_icon = "fa-shield-halved";}
                        if ($percentage >= 1) { $rank_title = "Cyber Master"; $rank_class = "master"; $rank_icon = "fa-crown"; }
                    ?>
                    <div class="rank-badge <?php echo $rank_class; ?>">
                        <i class="fas <?php echo $rank_icon; ?>"></i>
                        <span><?php echo $rank_title; ?></span>
                    </div>
                    <h2>Kuis Selesai!</h2>
                    <div class="score-circle">
                        <span class="score-text-main" data-score="<?php echo $score; ?>">0</span>
                        <span class="score-text-total">/ <?php echo $total_questions; ?></span>
                    </div>
                    <p id="score-text">Skor Benar</p>
                    <p id="feedback-text"><?php echo ($percentage <= 0.4) ? "Masih banyak yang perlu dipelajari! Jelajahi modul kami untuk meningkatkan skormu." : (($percentage <= 0.7) ? "Hasil yang bagus! Kamu sudah sadar akan banyak risiko. Tingkatkan terus pengetahuanmu!" : "Luar biasa! Kamu adalah seorang Penjaga Siber sejati. Pertahankan!"); ?></p>
                    <div class="result-navigation">
                        <a href="index.php" class="nav-button-secondary">Kembali ke Beranda</a>
                        <a href="kuis.php?action=start_over" class="nav-button-secondary">Ulangi Kuis</a>
                        <a href="index.php#modul-pembelajaran" class="nav-button-secondary">Pelajari Modul Lain</a>>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </main>
    <script src="cursor.js"></script>
    <script src="matrix.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Script untuk feedback klik
            const form = document.getElementById('quiz-form');
            if (form) {
                const radios = form.querySelectorAll('input[type="radio"]');
                radios.forEach(radio => {
                    radio.addEventListener('change', () => {
                        const labels = form.querySelectorAll('.option-label');
                        labels.forEach(label => label.classList.remove('selected'));
                        if (radio.checked) {
                            radio.closest('.option-label').classList.add('selected');
                        }
                    });
                });
            }

            // Script BARU untuk counter skor
            const scoreCounter = document.querySelector('.score-text-main');
            if (scoreCounter) {
                const finalScore = parseInt(scoreCounter.getAttribute('data-score'));
                let currentScore = 0;
                const increment = finalScore / 50; // Menentukan seberapa cepat hitungan naik

                function updateScore() {
                    if (currentScore < finalScore) {
                        currentScore += increment;
                        scoreCounter.textContent = Math.ceil(currentScore);
                        setTimeout(updateScore, 20); // Kecepatan animasi
                    } else {
                        scoreCounter.textContent = finalScore;
                    }
                }
                updateScore();
            }
        });
    </script>
</body>
</html>