<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

// Create connection

$conn = new mysqli($servername, 
    $username, $password, $dbname);

//Check connection

if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}

// Taking all 4 values from the form data - input

$login = $_REQUEST['login'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO logins VALUES (DEFAULT, '$login', 
'$password')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted succesfully";
} else {
    echo "Error" . $sql . "<br>" . $conn->error;
}

//Close connection
mysqli_close($conn);
//header('Location ' . $_SERVER['HTTP_REFERER']);
?>

