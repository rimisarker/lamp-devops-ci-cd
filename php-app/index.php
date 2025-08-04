<?php
include 'config.php';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<h2>Users List</h2>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
  <td><?= $row['id'] ?></td>
  <td><?= htmlspecialchars($row['name']) ?></td>
  <td><?= htmlspecialchars($row['email']) ?></td>
  <td>
    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | 
    <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this user?')">Delete</a>
  </td>
</tr>
<?php endwhile; ?>
</table>

<h2>Add User</h2>
<form action="create.php" method="post">
  Name: <input name="name" required><br>
  Email: <input name="email" required><br>
  <button type="submit">Add</button>
</form>
