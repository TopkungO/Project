<?php include('header.php'); ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="head_body">
              <h2 style="text-align:center">FoodPetControlerByNetpie</h2>
            </div>
            <div id=data>
              --
            </div>
            <div>
              <p><b>ปริมาณอาหารที่เหลืออยู่ :</b> <span id=food_v></span></p><br>
              <p><b>เวลาที่ตั้งอาหาร :</b><span id=date_food></span></p><br>
              <p><b>ปริมาณอาหารที่กำหนด :</b><span id=setfood></span></p>
            </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-header bg-info text-dark">
              <h4>เครื่องให้อาหารสัตว์เลี้ยง</h4>

            </div>
            <div class="card-body">
              <label for="">กำหนดเวลาให้อาหาร</label><br>
              <div class="">
                <input class="result form-control" type="text" id="time" ailng="center" placeholder="เวลา" onchange="sendtime()">
                <br>
                <button type="button" class="btn btn-primary" id="food" onclick="btnFood()" value='1'>ให้อาหาร</button>
                <button type="button" class="btn btn-danger" id="close" onclick="btnclose()" value='0'>หยุดให้อาหาร</button>
              </div>
              <div>
                <label for="">ปริมาณอาหาร</label><br>
                <input type="range" min="0" max="3" value="" step="0.1" id="sli_food" onclick="myFunction()">
                <p id="demo" style="margin-left:50px">1.5</p>
              </div>

            </div>

        </div>
        </div>
      </div>

      <script>
        $(function () {
          $('#time').bootstrapMaterialDatePicker({
            date: false,
            format: 'HH:mm'
            });
              });
        </script>
          </div>
<?php include('footer.php'); ?>
