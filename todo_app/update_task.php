<?php
require 'db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$priority = $_POST['priority'];
$due_date = $_POST['due_date'];

$sql = "UPDATE tasks SET title='$title', description='$description', priority='$priority', due_date='$due_date' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => $conn->error]);
}

$conn->close();
?>

