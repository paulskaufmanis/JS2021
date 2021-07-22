<?php
$servername = 'localhost'; 
$username = 'root';
$password = '';
$dbname = 'university';

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
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$phone = $_REQUEST['phone'];
$mail = $_REQUEST['mail'];

$sql = "INSERT INTO rector VALUES (DEFAULT, '$name', '$surname', '$age', '$gender', '$phone', '$mail')";

if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection 

mysqli_close($conn);
// header('Location: '.$_SERVER['HTTP_REFERER']);
?>