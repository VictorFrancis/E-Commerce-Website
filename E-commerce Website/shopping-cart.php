<?php

session_start();

require_once 'dbconnection.php';

$name = $_POST['name'];
$description = $_POST['description'];
$picture = $_POST['picture'];

$sql2= "INSERT INTO cart (name, description, email, picture) VALUES ('$name','$description','$email','$picture')";
if (mysqli_query($link, $sql2)) {
  echo "Registration successful";
}

else{
  echo "ERROR: Could not able to execute" . mysqli_error($link);
}

mysqli_close($link);

?>