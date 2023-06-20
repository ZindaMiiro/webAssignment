<?php
require_once("connect.php");
// Retrieve form data
$username = $_POST['username'];
$column = $_POST['column'];
$new_value = $_POST['new_value'];

// Update query
$sql = "UPDATE patients SET $column = '$new_value' WHERE Username = '$username'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
