<?php
  require_once("connect.php");
  require_once("pagination.php");
  include("header.php");
?>
<script type="text/javascript">
$(function () {
    // ดึงข้อมูลจากฐานข้อมูลสร้างตัวแปร object series ข้อมูลสำหรับใช้งาน
    $.getJSON( "series_db.php",{
        year:'2019' // ส่งค่าตัวแปร ไปถ้ามี ในที่นี้ ส่งปีไป เพราะจะดูข้อมูลรายเดือนของปีที่ก่ำหนด
    },function(data) {
            var dataSeries=data; // รับค่าข้อมูลตัวแปร object series
            $('#hc_container').highcharts(
                $.extend(chartOptions,{
                    series:dataSeries
                })
            );
    });
});
</script>


    <div class="container">
      <div class="">
        <h1>ประวัติการให้อาหาร</h1>
      </div>
        <div class="">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>ID</th>
                <th>device</th>
                <th>วันที่และเวลาให้อาหาร</th>
                <th>ปริมาณอาหาร</th>
              </tr>
            </thead>
            <?php
              $num = 0;
              $sql = "SELECT * FROM foodvol";
              $result=$mysqli->query($sql);
              $total=$result->num_rows;

              $e_page=5; // กำหนด จำนวนรายการที่แสดงในแต่ละหน้า
              $step_num=0;
              if(!isset($_GET['page']) || (isset($_GET['page']) && $_GET['page']==1)){
                  $_GET['page']=1;
                  $step_num=0;
                  $s_page = 0;
              }else{
                  $s_page = $_GET['page']-1;
                  $step_num=$_GET['page']-1;
                  $s_page = $s_page*$e_page;
              }
              $sql.=" ORDER BY id  LIMIT ".$s_page.",$e_page";
              $result=$mysqli->query($sql);
              if($result && $result->num_rows>0){  // คิวรี่ข้อมูลสำเร็จหรือไม่ และมีรายการข้อมูลหรือไม่
              while($row = $result->fetch_assoc()){ // วนลูปแสดงรายการ
                      $num++;
              ?>
            <tbody>
              <tr class="">
                <td><?=($step_num*$e_page)+$num?></td>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["device_id"];?></td>
                <td><?php echo $row["date_food"];?></td>
                <td><?php echo $row["food_vol"];?></td>
              </tr>

              <?php
                  }
                }
                ?>
            </tbody>
          </table>
          <div class="browse_page">
            <?php page_navi($total,(isset($_GET['page']))?$_GET['page']:1,$e_page); ?>
          </div>
        </div>


    </div>
    <!-- charst -->
    <div style="width:80%;margin:auto; margin-top:5%;">
      <div id="hc_container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

    </div>
  </body>
</html>
