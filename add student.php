<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guide";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to add a student
function addStudent($name, $conn) {
    $sql = "INSERT INTO students (St_name) VALUES ('$name')";
    if ($conn->query($sql) === true) {
        echo "Student added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>