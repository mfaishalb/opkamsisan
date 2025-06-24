<?php
session_start();
require_once 'data_modul.php'; // Panggil bank data kita

// Mengambil parameter dari URL
$topic_key = $_GET['topic'] ?? 'malware';
$bab_id = isset($_GET['bab']) ? (int)$_GET['bab'] : 1;
$lesson_id = isset($_GET['lesson']) ? (int)$_GET['lesson'] : 1;

$topic_data = $learning_data[$topic_key];
$chapter_data = $topic_data['chapters'][$bab_id];
$lesson_data = $chapter_data['lessons'][$lesson_id];

// Variabel untuk feedback kuis
$feedback = null;

// Logika untuk proses jawaban kuis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'submit_lesson_quiz') {
    $user_answer = isset($_POST['answer']) ? (int)$_POST['answer'] : -1;
    $correct_answer = $lesson_data['answer'];

    if ($user_answer === $correct_answer) {
        $feedback = ['type' => 'benar', 'message' => 'Jawabanmu Benar! Silakan klik tombol di bawah untuk melanjutkan.'];
        $_SESSION['lesson_completed'][$topic_key][$bab_id][$lesson_id] = true;
    } else {
        $feedback = ['type' => 'salah', 'message' => 'Ups, jawabanmu kurang tepat. Coba jawab kembali.'];
    }
}

// --- LOGIKA NAVIGASI CERDAS (BARU) ---
$next_link = null;
$next_text = '';

// Cek apakah ada sub-bab berikutnya di bab yang sama
if (isset($chapter_data['lessons'][$lesson_id + 1])) {
    $next_link = "pelajaran.php?topic={$topic_key}&bab={$bab_id}&lesson=" . ($lesson_id + 1);
    $next_text = "Selanjutnya →";
} 
// Jika tidak ada, cek apakah ada bab berikutnya di topik yang sama
elseif (isset($topic_data['chapters'][$bab_id + 1])) {
    $next_link = "pelajaran.php?topic={$topic_key}&bab=" . ($bab_id + 1) . "&lesson=1";
    $next_text = "Lanjut ke Bab Berikutnya →";
} 
// Jika ini adalah bab terakhir
else {
    $next_link = "topik.php?topic={$topic_key}";
    $next_text = "Selesaikan Modul & Kembali";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($lesson_data['title']); ?> - JagaSiber</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;700&family=Lora:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="page-background">
    <nav>
        <div class="container">
            <a href="index.php" class="logo">GELITIKS🛡️</a>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="topik.php?topic=<?php echo $topic_key; ?>">Daftar Bab</a></li>
                <li><a href="kuis.php" class="button-nav">Kuis Utama</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="breadcrumb">
        <div class="container">
            <a href="index.php">Home</a> > 
            <a href="topik.php?topic=<?php echo $topic_key; ?>"><?php echo htmlspecialchars($topic_data['title']); ?></a> >
            <span><?php echo htmlspecialchars($chapter_data['title']); ?></span>
        </div>
    </div>

    <div class="learning-wrapper container">
        <aside class="learning-sidebar">
            <h4>Daftar Sub-bab</h4>
            <ul>
                <?php foreach ($chapter_data['lessons'] as $id => $lesson): 
                    $is_completed = isset($_SESSION['lesson_completed'][$topic_key][$bab_id][$id]);
                ?>
                    <li class="<?php echo ($id == $lesson_id) ? 'active' : ''; ?>">
                        <a href="pelajaran.php?topic=<?php echo $topic_key; ?>&bab=<?php echo $bab_id; ?>&lesson=<?php echo $id; ?>">
                            <i class="fas <?php echo $is_completed ? 'fa-check-circle' : ($lesson['type'] === 'materi' ? 'fa-file-alt' : 'fa-question-circle'); ?>"></i>
                            <div class="lesson-info">
                                <span><?php echo htmlspecialchars($lesson['title']); ?></span>
                                <small><?php echo htmlspecialchars($lesson['duration']); ?></small>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>

        <main class="learning-content">
            <div class="content-box">
                <h2><?php echo htmlspecialchars($lesson_data['title']); ?></h2>
                <?php if ($lesson_data['type'] === 'materi'): ?>
                    <div class="materi-box">
                        <?php echo $lesson_data['content']; ?>
                    </div>
                <?php elseif ($lesson_data['type'] === 'kuis'): ?>
                    <form class="kuis-singkat-form" method="POST" action="pelajaran.php?topic=<?php echo $topic_key; ?>&bab=<?php echo $bab_id; ?>&lesson=<?php echo $lesson_id; ?>">
                        <input type="hidden" name="action" value="submit_lesson_quiz">
                        <p class="question"><?php echo htmlspecialchars($lesson_data['question']); ?></p>
                        <div class="options">
                             <?php foreach ($lesson_data['options'] as $index => $option): ?>
                            <label>
                                <input type="radio" name="answer" value="<?php echo $index; ?>" required>
                                <?php echo htmlspecialchars($option); ?>
                            </label>
                            <?php endforeach; ?>
                        </div>
                        <button type="submit" class="modul-button">Periksa</button>
                    </form>
                    <?php if ($feedback): ?>
                        <div class="feedback-kuis-singkat <?php echo $feedback['type']; ?>">
                            <?php echo htmlspecialchars($feedback['message']); ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="content-navigation">
                <?php if (isset($chapter_data['lessons'][$lesson_id - 1])): ?>
                    <a href="pelajaran.php?topic=<?php echo $topic_key; ?>&bab=<?php echo $bab_id; ?>&lesson=<?php echo $lesson_id - 1; ?>" class="nav-button prev">← Sebelumnya</a>
                <?php else: ?>
                    <span></span>
                <?php endif; ?>
                
                <?php 
                // Tampilkan tombol "Selanjutnya" jika ini adalah materi, ATAU jika ini kuis dan sudah dijawab dengan benar
                $is_quiz_and_correct = ($lesson_data['type'] === 'kuis' && isset($feedback) && $feedback['type'] === 'benar');
                $is_materi = $lesson_data['type'] === 'materi';
                
                if ($is_materi || $is_quiz_and_correct): 
                ?>
                    <a href="<?php echo $next_link; ?>" class="nav-button next"><?php echo $next_text; ?></a>
                <?php endif; ?>
            </div>
        </main>
    </div>
</body>
</html>