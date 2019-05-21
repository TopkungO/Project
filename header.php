<!DOCTYPE html>
<?php include 'style.css';
      session_start();
?>
<html lang="en">
  <title>Home</title>
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/css/bootstrap-material-datetimepicker.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/js/bootstrap-material-datetimepicker.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/locale/ja.js"></script>

    <script src="https://cdn.netpie.io/microgear.js"></script>
    <script>
      const APPID     ='FoodPet';
      const KEY    ='Cm6tQwcUVesdJSW';
      const SECRET ='nPalTW9LjQRtsWI2NpQq2PpM1';
      const ALIAS ='ControlByHtml';
      var publishTopic='/fooddata/contorl'

      var microgear=Microgear.create({
      key: KEY,
  		secret: SECRET,
  		alias : ALIAS
      });

      microgear.on('message',function(topie,msg){
        if (msg.length==0) {

        }else {
          document.getElementById("data").innerHTML=topie+""+msg;

          if (msg.substring(0,5)=="sonar") {
            document.getElementById("food_v").innerHTML=msg.substring(5,msg.length);
          var sonar=parseInt(msg.substring(5,msg.length));
            if (sonar<=10) {
              alert('กรุณาเติมอาหาร'),3000;
            }
        }else if (msg.substring(2,3)=="h") {
          //h21,m23,fv0.1  {"hour_ch":15,"min_ch":20,"food_vol":0.5}
          var obj = JSON.parse(msg);
          document.getElementById("date_food").innerHTML=obj.hour_ch+":"+obj.min_ch+" น.";
          document.getElementById("setfood").innerHTML=obj.food_vol+"กิโลกรัม";

        }else if (msg.substring(0,4)=="Time"){
          var nn=msg.substring(4,msg.length);
          window.location="inser.php?food_v="+nn;

        }
        }
      });

    /*  microgear.on('connected', function() {
            microgear.setAlias(ALIAS);
           document.getElementById("data1").innerHTML = "ได้เชื่อมต่อ netpie แล้ว";

            });
*/
      microgear.connect(APPID);

      function btnFood() {
        var btnValue=document.getElementById("food").value;
        if (btnValue=='1') {
          microgear.publish(publishTopic,'1');
          console.log('btn Value'+btnValue);
        }
      }
      function btnclose() {
        var btnValue=document.getElementById("close").value;
        if (btnValue=='0') {
          microgear.publish(publishTopic,'0');
          console.log('btn Value'+btnValue);
        }
      }
      function myFunction() {
      var x = document.getElementById("sli_food").value;
      document.getElementById("demo").innerHTML = x;
      microgear.publish(publishTopic,'f'+x);
      console.log('f'+x);
      }

      function sendtime() {
      var t = document.getElementById("time").value;
      microgear.publish(publishTopic,'t'+t);
      console.log('t'+t);
      }
      $(function(){
    /*เมื่อปุ่มปิด หรือ เปิด เมนูด้านซ้ายถูกคลิก*/
    $(".close-l-sidenav,.open-l-sidenav").on("click",function(){
        var toggleWidth = ($(".l-sidenav").width()==0)?250:0;
        $(".l-sidenav").width(toggleWidth);
      });
    });

    </script>


    <title></title>
  </head>
  <body>

    <!-- sidemenu ด้านซ้าย-->
<nav class="l-sidenav bg-light">
<div class="card bg-warning">
  <div class="navbar navbar-light">
  <a class="invisible"></a>
  <button type="button" class="close close-l-sidenav btn pl-2">
  <span aria-hidden="true">&times;</span>
</button>

  </div>
  <div class="card-body pt-1 text-center">
    <?php
      if (isset($_SESSION['id'])) {
     ?>
    <img src="\img\icon.png"   class="rounded-circle" style="width:75px;height:75px;">
    <div class="">คุณ <?php echo $_SESSION['name']; ?> </div>
  </div>
</div>
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <a class="nav-link active" href="index.php">Home</a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <a class="nav-link active" href="Control.php">ตั้งเวลาให้อาหาร</a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <a class="nav-link" href="history.php">ประวัติการให้อาหาร</a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <a class="nav-link" href="logout.php" id="logout">logout</a>
  </li>
<?php }else{ ?>
  <img src="\img\icon.png"   class="rounded-circle" style="width:75px;height:75px;">
    <div class=""><a href="login.php">login </a></div>
  </div>
</div>
  <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      <a class="nav-link active" href="Control.php">Home</a>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      <a class="nav-link" href="history.php">ประวัติการให้อาหาร</a>
    </li>
<?php } ?>
</ul>
</nav>

<!-- ส่วนของการใช้งาน navbar-->
 <nav class="navbar navbar-light bg-warning">
<!-- ปุมด้านซ้าย แสดงเมนู-->
  <button class="navbar-toggler border-0 px-0 open-l-sidenav" type="button">
    <i class="fa fa-align-justify"></i>
  </button>

</nav>
