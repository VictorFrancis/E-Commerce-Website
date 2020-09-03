<?php

require_once 'dbconnection.php';

$pname=$_POST['pname'];
$pdes=$_POST['pdes'];
$pimg=$_POST['pimg'];


$sql= "INSERT INTO custom (name, description, image) VALUES ('$pname','$pdes','$pimg')";
if (mysqli_query($link, $sql)) {
	echo "Order added successful";
}

else{
	echo "ERROR: Could not able to execute" . mysqli_error($link);
}

mysqli_close($link);

?>