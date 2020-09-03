<?php

session_start();

require_once 'dbconnection.php';

$pname = $_POST['pname'];
$pdes = $_POST['pdes'];
$purl = $_POST['purl'];

$sql= "INSERT INTO product (name, detail, image) VALUES ('$pname','$pdes','$purl')";
if (mysqli_query($link, $sql)) {
  echo "Product Added";
}

else{
  echo "ERROR: Could not able to execute" . mysqli_error($link);
}

mysqli_close($link);

?>