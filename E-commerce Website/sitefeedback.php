<?php

require_once 'dbconnection.php';

$sname=$_POST['sname'];
$semail=$_POST['semail'];
$ssubject=$_POST['ssubject'];
$smessage=$_POST['smessage'];


$sql= "INSERT INTO feedback (name, email, subject, message) VALUES ('$sname','$semail','$ssubject','$smessage')";
if (mysqli_query($link, $sql)) {
	echo "Your Feedback is successfully received";
}

else{
	echo "ERROR: Could not able to execute" . mysqli_error($link);
}

mysqli_close($link);

?>