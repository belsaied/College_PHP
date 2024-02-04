<?php


session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guide";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

// Fetch registered subjects and grades for the logged-in student
$studentId = $_SESSION['user_id'];

$sql = "SELECT subjects.sub_name, registeration.Degree
        FROM subjects
        INNER JOIN registeration ON subjects.sub_id = registeration.sub_id
        WHERE registeration.St_id = $studentId";

$result = $conn->query($sql);
}
?>
<html>
<head>
    <title>Student Dashboard</title>
</head>
<body>
    <h1>Welcome to the Student Dashboard</h1>
    <h2>Registered Subjects and Grades:</h2>
    <?php
    if ($result->num_rows > 0) {
      
        while ($row = $result->fetch_assoc()) {
            echo "<li>subjects: " . $row['sub_name'] . ", Degree: " . $row['Degree'] ;
        }
     
    } else {
        echo "No subjects or grades found.";
    }
    ?>
</body>



