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
$gender = $_REQUEST['gender'];
$age = $_REQUEST['age'];

$facultyName = $_REQUEST['facultyName'];


$sql = "SELECT DISTINCT Name, Surname FROM `student` WHERE Name='$name' AND Surname='$surname'";




// return all from Faculty 
// $sql = "SELECT s.* FROM `student` s 
// INNER JOIN faculty f ON s.Id_faculty = f.Id_faculty
// WHERE f.Name LIKE '$facultyName%'";

// By Name and Surname
// $sql = "SELECT s.Age FROM `student` s WHERE Name='$name' and Surname='$surname'";

//By Gender
// $sql = "SELECT * FROM student WHERE Gender='$gender'";

//By Name
// $sql = "SELECT * FROM student WHERE name='$name'";
$result = $conn->query($sql);
if ($result!==false&& $result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {
        // By Gender or Name
        // echo "id:" . $row["Id_Student"]. " - " . $row["Name"]. " " . $row["Surname"]. " " . $row["Gender"]. " " . $row["Age"]. "<br>";
        echo "{$row['Name']} {$row['Surname']}<br>";
                // echo "Yes!";
        //ByName and Surname
        // echo "Age: " .$row["Age"]. "<br>";

        //Create cookies
        //$cookie_name = "StudentName"

    }   
} else {
    echo "0 results";
}

// Close connection 
$conn->close()
// header('Location: '.$_SERVER['HTTP_REFERER']);
?>