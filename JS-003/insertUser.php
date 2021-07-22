<?php
$servername = 'localhost'; 
$username = 'root';
$password = '';
$dbname = 'users';

// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}

// Take values
$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO user VALUES (DEFAULT, '$name', '$surname', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection 

mysqli_close($conn);
header('Location: welcome.html');
?>