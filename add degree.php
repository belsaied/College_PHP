<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guide";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Function to add a degree for a student
function addDegree($studentId, $subjectId, $degree, $conn) {
    $sql = "INSERT INTO registration (St_id, sub_id, Degree) 
            VALUES ($studentId, $subjectId, $degree)";
    if ($conn->query($sql) === true) {
        echo "Degree added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>