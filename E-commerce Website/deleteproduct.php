<?php

session_start();

require_once 'dbconnection.php';

$pname = $_POST['pname'];
$pdes = $_POST['pdes'];
$purl = $_POST['purl'];

$sql= "DELETE FROM product WHERE name='$pname';";
if (mysqli_query($link, $sql)) {
  echo "Product Deleted";
}

else{
  echo "ERROR: Could not able to execute" . mysqli_error($link);
}

mysqli_close($link);

?>