<?php
$servername = "localhost";
$username = "root"; // root
$password = ""; // ""

//CREATE CONNECTION

$conn = mysqli_connect($servername,$username,$password);

//Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$database="goetel";

if (mysqli_select_db($conn,$database)) {
    echo "Database $database selected";
} else {
    echo "Error select database:" .
mysqli_error($conn);
}

$sql = "INSERT INTO MyGuests (firstname,lastname,email)
VALUES ('Jacek', 'Jaworek', 'jaworek@intercontinental.pl'),
('Robert', 'Lewandowki', '9Lewandowski9@interia.pl'),
('Maciej', 'swiety', 'amaciej07@gmail.com'),
('Michal', 'Dzban', 'dzban@gmail.pl')";
if (mysqli_query($conn,$sql)) {
    echo "New record created succesfully";
} else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}