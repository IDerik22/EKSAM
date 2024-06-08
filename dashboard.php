<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

include '../db.php';

$sql = "SELECT * FROM participants";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Võistlejate nimekiri</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Eesnimi</th>
          <th>Perekonnanimi</th>
          <th>Võistlusklass</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo $row['firstName']; ?></td>
            <td><?php echo $row['lastName']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['email']; ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
    <form action="logout.php" method="POST">
      <button type="submit" class="btn btn-danger">Logi välja</button>
    </form>
  </div>
</body>
</html>

<?php
$conn->close();
?>
