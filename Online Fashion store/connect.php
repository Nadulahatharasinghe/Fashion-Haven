<?php

  $con = new mysqli('localhost','root','','fashion_haven');

  if(!$con){

    die(mysqli_error($con));
  } 
  

?>