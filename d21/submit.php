<?php
header('Content-Type: application/json'); // Set header untuk output JSON

include 'db.php';

$response = [
    'status' => 'error',
    'message' => '❌ Sinyal Ditolak. Data tidak valid.'
];

if (isset($_POST['id']) && isset($_POST['flag'])) {
    $id = intval($_POST['id']);
    $flag = trim($_POST['flag']);

    $stmt = $conn->prepare("SELECT flag FROM flags WHERE challenge_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($correct_flag);
    $stmt->fetch();
    $stmt->close();
    $conn->close();

    if ($correct_flag && $flag === $correct_flag) {
        $response['status'] = 'success';
        $response['message'] = '✅ Flag Benar! Akses Diberikan.';
    } else {
        $response['message'] = '❌ Flag Salah. Sinyal Ditolak.';
    }
}

echo json_encode($response);
?>