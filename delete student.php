<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guide";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Function to delete student data
function deleteStudent($studentId, $conn) {
    $sql = "DELETE FROM students WHERE St_id=$studentId";
    if ($conn->query($sql) === true) {
        echo "Student deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>