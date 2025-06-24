<?php
include 'db.php';
$page_title = 'Scoreboard';
include 'header.php';
?>
<title><?php echo $page_title; ?></title>
<h1>Papan Peringkat</h1>
<table class="scoreboard-table">
  <thead>
    <tr>
      <th>Peringkat</th>
      <th>Username</th>
      <th>Total Poin</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql = "SELECT u.username, SUM(c.points) as total_points
              FROM users u
              JOIN solves s ON u.id = s.user_id
              JOIN challenges c ON s.challenge_id = c.id
              GROUP BY u.username
              ORDER BY total_points DESC, MAX(s.solved_at) ASC";
      $result = $conn->query($sql);
      $rank = 1;
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $rank++ . "</td>";
              echo "<td>" . htmlspecialchars($row['username']) . "</td>";
              echo "<td>" . htmlspecialchars($row['total_points']) . "</td>";
              echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='3'>Belum ada yang menyelesaikan tantangan. Jadilah yang pertama!</td></tr>";
      }
      $conn->close();
    ?>
  </tbody>
</table>
<?php include 'footer.php'; ?>