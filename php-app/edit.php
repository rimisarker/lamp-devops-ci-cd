<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $conn->prepare("UPDATE users SET name=?, email=? WHERE id=?");
  $stmt->bind_param("ssi", $_POST['name'], $_POST['email'], $_POST['id']);
  $stmt->execute();
  header("Location: index.php");
  exit();
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$user = $result->fetch_assoc();
?>

<form method="post" action="edit.php">
  <input type="hidden" name="id" value="<?= $user['id'] ?>">
  Name: <input name="name" value="<?= $user['name'] ?>"><br>
  Email: <input name="email" value="<?= $user['email'] ?>"><br>
  <button type="submit">Update</button>
</form>
