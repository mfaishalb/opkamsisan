<?php
$user_id = $_GET['user_id'];
$file = "/home/files/" . $user_id . ".pdf";
if (file_exists($file)) {
    readfile($file);
}
?>
