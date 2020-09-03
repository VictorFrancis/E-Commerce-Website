<?php

session_start();

require_once 'dbconnection.php';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$pnum = $_POST['pnum'];
$type = $_POST['type'];

$sql2= "INSERT INTO user (firstname, lastname, email, password, phonenumber, type) VALUES ('$fname','$lname','$email','$pass','$pnum','$type')";
if (mysqli_query($link, $sql2)) {
  echo "Registration successful";
}

else{
  echo "ERROR: Could not able to execute" . mysqli_error($link);
}

mysqli_close($link);

?>