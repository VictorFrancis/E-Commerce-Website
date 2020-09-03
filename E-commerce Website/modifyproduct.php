<?php

session_start();

require_once 'dbconnection.php';

$oname = $_POST['oname'];
$pname = $_POST['pname'];
$pdes = $_POST['pdes'];
$purl = $_POST['purl'];

$sql= "UPDATE product
SET name='$pname', detail='$pdes', image='$purl'
WHERE name=$oname;";
if (mysqli_query($link, $sql)) {
  echo "Product Added";
}

else{
  echo "ERROR: Could not able to execute" . mysqli_error($link);
}

mysqli_close($link);

?>