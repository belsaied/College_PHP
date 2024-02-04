
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guide";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Function to get registered subjects for a student
function getRegisteredSubjects($studentId, $conn) {
    $sql = "SELECT subjects.sub_name, registration.Degree FROM registration 
            INNER JOIN subjects ON registration.sub_id = subjects.sub_id 
            WHERE registration.St_id = $studentId";
    $result = $conn->query($sql);
    $registeredSubjects = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $subjectName = $row['sub_name'];
            $degree = $row['Degree'];
            $registeredSubjects[] = array('sub_name' => $subjectName, 'Degree' => $degree);
        }
    }
    return $registeredSubjects;
}

?>