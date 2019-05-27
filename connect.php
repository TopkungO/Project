<?php
$mysqli =  new mysqli("localhost","root","","foodpet");
  if ($mysqli->connect_error) {
      die("Connection failed:".$mysqli->connect_error);
      }
      mysqli_query($mysqli,"set character set utf8"); 
 ?>
