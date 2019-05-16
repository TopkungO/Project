<?php
    $objfood=$_GET["food_v"];
    include 'connect.php';
    date_default_timezone_set("Asia/Bangkok");
    $hour=date("Y-m-d h:i:s");
    $sql="INSERT INTO foodvol(device_id,date_food,food_vol) VALUES('NodeMCU','$hour','$objfood')";
    if (mysqli_query($mysqli,$sql)) {
      echo "<script>";
      echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
      echo "window.location ='Control.php';";
      echo "</script>";
 } else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
 }

 ?>
