<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guide";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Function to edit student data
function editStudent($studentId, $name, $conn) {
    $sql = "UPDATE students SET name='$name' WHERE St_id=$studentId";
    if ($conn->query($sql) === true) {
        echo "Student data updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>