<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'cloudmart');


$email = $_POST['lg-email'];
$pass = $_POST['lg-pass'];
$type = $_POST['lg-type'];
$cus = "Customer";
$emp = "Employee";

$s = "SELECT * FROM user where email = '$email' && password = '$pass' && type = '$type' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1 && $type == $cus){
	header('location:index.php');

}
else if($num == 1 && $type == $emp){
	header('location:adminpanel.php');

}
else{
	header('location:index.php');

}



?>