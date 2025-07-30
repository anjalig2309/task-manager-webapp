<?php
include 'db_connect.php';
$task = $_POST['task_name'];
$date = $_POST['due_date'];
$category = $_POST['category'];

$query = "INSERT INTO tasks (task_name, due_date, category) VALUES ('$task', '$date', '$category')";
mysqli_query($conn, $query);
header("Location: index.php");
?>
