<?php

require_once 'dbconnection.php';

$subname=$_POST['subname'];
$subemail=$_POST['subemail'];


$sql= "INSERT INTO subscribe (name, email) VALUES ('$subname','$subemail')";
if (mysqli_query($link, $sql)) {
	echo "You're successfully subscribed";
}

else{
	echo "ERROR: Could not able to execute" . mysqli_error($link);
}

mysqli_close($link);

?>