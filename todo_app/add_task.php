<?php
require 'db.php';

$title = $_POST['title'];
$description = $_POST['description'];
$priority = $_POST['priority'];
$due_date = $_POST['due_date'];

$sql = "INSERT INTO tasks (title, description, priority, due_date, status) VALUES ('$title', '$description', '$priority', '$due_date', 'Active')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => $conn->error]);
}

$conn->close();
?>

