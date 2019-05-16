<?php
$mysqli =  new mysqli("localhost","root","","foodpet");
  if ($mysqli->connect_error) {
      die("Connection failed:".$mysqli->connect_error);
      }
 ?>
