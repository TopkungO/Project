<?php
require_once("connect.php");
header("Content-type:application/json; charset=UTF-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);


$more_q="";
if(isset($_GET['year']) && $_GET['year']!=""){
    $more_q.="AND DATE_FORMAT(date_food,'%Y') ='".$_GET['year']."' ";
}
$q="
SELECT SUM(food_vol) as sum_food_vol FROM foodvol
WHERE 1 $more_q
GROUP BY DATE_FORMAT(date_food,'%Y-%m')
ORDER BY date_food
";
$qr=mysqli_query($mysqli,$q);
while($rs=mysqli_fetch_array($qr)){
    floatval(number_format($rs['sum_food_vol'],2,".",""));
    $json_data[]=floatval(number_format($rs['sum_food_vol'],3,".","")); // ใช้ float ฟังชั่นเพื่อกำหนดค่าเป็นตัวเลข number_format จัดรูปแบบ ทสนิยม
}
// จัดรูปแบบข้อมูลก่อนแปลงเป็น json object
$json_series[]=array(
    "name"=>"NodeMCU",
    "data"=>$json_data
);
$json= json_encode($json_series); // แปลงข้อมูล array เป็น ข้อความ json object นำไปใช้งาน
// ทำให้ json ไฟล์รองรับ callback function สำหรับ cross domain
if(isset($_GET['callback']) && $_GET['callback']!=""){
echo $_GET['callback']."(".$json.");";
}else{
echo $json;
}
exit;
?>
