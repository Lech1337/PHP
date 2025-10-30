<?php
$servername= "localhost";
$username = "root"; // root
$password = ""; // ""


//CREATE CONNECTION


$conn = mysqli_connect($servername,$username,$password);


//Check connection


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$database="goetel_makow";
// Create database

 $sql= "CREATE DATABASE $database";
if (mysqli_query($conn,$sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
*/
// CONNECT TO DATABASE
if (mysqli_select_db($conn,$database)) {
    echo "Database $database selected";
} else {
    echo "Error select database:" .
mysqli_error($conn);
}
// CREATE TABLE

$sql="CREATE TABLE 5tia1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
numer int(99) NOT NULL,
if (mysqli_query($conn,$sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table:" . mysqli_error($conn);
}
    
//INSERT INTO
 $sql = "INSERT INTO MyGuests (firstname,numer)
VALUES ('Kamil','1')
if (mysqli_query($conn,$sql)) {
    echo "New record created succesfully";
} else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}
    




