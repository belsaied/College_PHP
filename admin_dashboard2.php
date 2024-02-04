
<?php

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

    echo "<h1>Welcome to the Admin Dashboard</h1>";
    echo "<p>Add degrees, register subjects, add/edit/delete student data from here.</p>";
}
?>
 

    <!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>

    <h2>Add Degree</h2>
    <form action="add degree.php" method="POST">
    <label for="sub_id">Subject id:</label>
        <input type="text" id="sub_id" name="sub_id" required><br><br>
        <br>
        <label for="St_id">Student id:</label>
        <input type="text" id="St_id" name="St_id" required><br><br>
<br>
<label for="Degree">Degree:</label>
        <input type="text" id="Degree" name="Degree" required><br><br>


        <input type="submit" value="Add Degree">
    </form>

    <h2>Register Subject</h2>
    <form action="register subject.php" method="POST">
        <label for="sub_name">Subject Name:</label>
        <input type="text" id="sub_name" name="sub_name" required><br><br>
        <label for="Degree">Subject Code:</label>
        <input type="text" id="Degree" name="Degree" required><br><br>
        <input type="submit" value="Register Subject">
    </form>

 

    <h2>Edit Student</h2>
    <form action="edit_student.php" method="POST">
        <label for="St_id">Student ID:</label>
        <input type="text" id="St_id" name="St_id" required><br><br>

        <input type="submit" value="Edit Student">
    </form>

    <h2>Delete Student</h2>
    <form action="delete_student.php" method="POST">
        <label for="St_id">Student ID:</label>
        <input type="text" id="St_id" name="St_id" required><br><br>
        <input type="submit" value="Delete Student">
    </form>
</body>
</html>
