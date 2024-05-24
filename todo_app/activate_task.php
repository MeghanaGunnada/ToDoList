<?php
require 'db.php';

$id = $_POST['id'];

$sql = "UPDATE tasks SET status='Active' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => $conn->error]);
}

$conn->close();
?>
