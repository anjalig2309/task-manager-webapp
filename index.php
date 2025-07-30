<?php
include 'db_connect.php';
$result = mysqli_query($conn, "SELECT * FROM tasks");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Task Manager</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Task Manager</h2>
  <form action="add_task.php" method="POST">
    <input type="text" name="task_name" placeholder="Task Name" required>
    <input type="date" name="due_date" required>
    <input type="text" name="category" placeholder="Category">
    <button type="submit">Add Task</button>
  </form>
  <table>
    <tr><th>Task</th><th>Due Date</th><th>Category</th><th>Action</th></tr>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?= $row['task_name'] ?></td>
        <td><?= $row['due_date'] ?></td>
        <td><?= $row['category'] ?></td>
        <td><a href="delete_task.php?id=<?= $row['id'] ?>">Delete</a></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>


