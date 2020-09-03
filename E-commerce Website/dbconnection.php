<?php

$link = mysqli_connect("localhost","root","","cloudmart");

if($link===false){
  die("Error, cannot connect." . mysqli_connect_error());
}

?>