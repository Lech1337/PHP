<?php

$name=$_POST['name'];
$email=$_POST['email'];
$sql = "INSERT INTO Myguests(firstname,email)
VALUES('$name','$email')";

if (mysqli_query($conn,$sql)) {
    echo "New record created succesfully";
} else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}