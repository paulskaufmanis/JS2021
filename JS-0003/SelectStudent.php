<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Taking all 4 values from the form data - input

$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$gender = $_REQUEST['gender'];
$age = $_REQUEST['age'];

$sql = "SELECT * FROM `student` WHERE `Gender`='$gender';";
//$sql = "SELECT s.Age FROM `student` s WHERE `Name`='$name' and `Surname`='$surname';";
// $sql = "SELECT * FROM student where name='$name'";
$result = $conn->query($sql);
if ($result!==false && $result->num_rows > 0) {
    //output data on each row
    while($row = $result->fetch_assoc()) {
      //  echo "id: " . $row["Id_Student"]. " " . $row["Name"]. " " . $row["Surname"]. " ". $row["Gender"]. " " . $row["Age"]. "<br>";
echo "Gender: " . $row["Name"]. "<br>";
        // //create cookies
        // $cookie_name = "StudentName";
        // $cookie_value = $row["Name"];
        // setcookie($cookie_name, $cookie_value);
        // if(!isset($_COOKIES[$cookie_name])) {
        //     print("Cookie created! ");
        // }
    } 
}   else {
    echo "0 results";
}
$conn->close();

?>


