<?php
$servername = 'localhost'; 
$username = 'root';
$password = '';
$dbname = 'university';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}

$sql = "SELECT s.* FROM `student` s 
INNER JOIN faculty f ON s.Id_faculty = 1
ORDER BY s.Age DESC
LIMIT 1";

$result = $conn->query($sql);
if ($result!==false&& $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id:" . $row["Id_Student"]. " - " . $row["Name"]. " " . $row["Surname"]. " " . $row["Gender"]. " " . $row["Age"]. "<br>";
    }   
} else {
    echo "0 results";
}

$conn->close()
?>