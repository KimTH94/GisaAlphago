<style media="screen">
#test{
  position:absolute;
  top:200px;
  left:200px;
}
#examsubmit{
  position:absolute;
  top:600px;
  left:750px;
}
#startTest{
  position:absolute;
  top:600px;
  left:400px;
}
#start{
  position:absolute;
  top:450px;
  left:1000px;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php
  include 'index.php';
  $pQuestion = $_POST['question'];
  $pNumber = $_POST['number'];
?>

<div id="test" style="display : none;">
  <div style="display : flex;">
    <div id="year" style="color: black;"></div>(<div id="current"></div> / <div><?php echo $pNumber?></div>)
  </div>
  <h5><strong><p id="content" style="color: black;"></p></strong></h5><br>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="choice11" name="question1" value="1">
    <label class="custom-control-label" for="choice11" style="color: black;"><h6><p id="choice1" style="color : black;"></p></h6></label>
  </div>
  <br>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="choice21" name="question1" value="2">
    <label class="custom-control-label" for="choice21" style="color: black;"><h6><p id="choice2" style="color : black;"></p></h6></label>
  </div>
  <br>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="choice31" name="question1" value="3">
    <label class="custom-control-label" for="choice31" style="color: black;"><h6><p id="choice3" style="color : black;"></p></h6></label>
  </div>
  <br>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="choice41" name="question1" value="4">
    <label class="custom-control-label" for="choice41" style="color: black;"><h6><p id="choice4" style="color : black;"></p></h6></label>
  </div>
  <br>
  정답 : <span id="correct"></span>
</div>
<input type="button" class="btn btn-info" id="start" value="start" onclick="start();" style="margin-right: 1000px;">
<center><input type="button" class="btn btn-info" id="examsubmit" value="submit" onclick="goActEvent();" style="display : none;"></center>

<script type="text/javascript">
var a = 1;
var total = <?php echo $pNumber?>;
var current = 0;
var right = 0;
function start(){
  $.ajax({
    url				: 'act.php',
    data			: {param1 : a, param2 : <?php echo $pQuestion ?>, param3 : <?php echo $pNumber ?>},
    type			: 'POST',
    dataType	: 'json',
    success   : function(data){
      $("#test").show();
      $("#start").hide();
      $("#examsubmit").attr("value", "제출");
      $("#examsubmit").show();
      $("#content").html(data.content);
      $("#img").html(data.img);
      $("#choice1").html("1. " + data.choice1);
      $("#choice2").html("2. " + data.choice2);
      $("#choice3").html("3. " + data.choice3);
      $("#choice4").html("4. " + data.choice4);
      $("#correct").html(data.correct);
      $("#year").html(data.year + "년 " + data.turn + "회차 " + data.type);
      $("#turn").html(data.turn);
      a++;
      current++;
      $("#current").html(current);
    }
  });
}

function goActEvent() {
  var q = $(":input:radio[name=question1]:checked").val();
  var z = $("#correct").html();
  $.ajax({
    url				: 'act.php',
    data			: {param1 : a, param2 : <?php echo $pQuestion ?>, param3 : <?php echo $pNumber ?>},
    type			: 'POST',
    dataType	: 'json',
    success		: function(data) {
      if(q == undefined){
        alert("보기를 선택해주세요");
      }else if(q != undefined){
        if(q == z){
          if(current != total){
          alert("정답입니다.");
          a++;
          current++;
          right++;
          $("#content").html(data.content);
          $("#choice1").html("1. " + data.choice1);
          $("#choice2").html("2. " + data.choice2);
          $("#choice3").html("3. " + data.choice3);
          $("#choice4").html("4. " + data.choice4);
          $("#correct").html(data.correct);
          $("#year").html(data.year + "년 " + data.turn + "회차 " + data.type);
          $("#turn").html(data.turn);
          $("#current").html(current);
        }else if(current == total){
          alert("정답입니다.\n 테스트를 종료합니다.\n 맞은 문항 :" + right);
          location.href="test.php";
        }
        }else if(q != z){
          if(current != total){
          alert("오답입니다.");
          a++;
          current++;
          $("#content").html(data.content);
          $("#choice1").html("1. " + data.choice1);
          $("#choice2").html("2. " + data.choice2);
          $("#choice3").html("3. " + data.choice3);
          $("#choice4").html("4. " + data.choice4);
          $("#correct").html(data.correct);
          $("#year").html(data.year + "년 " + data.turn + "회차 " + data.type);
          $("#turn").html(data.turn);
          $("#current").html(current);
        }else if(current == total){
          alert("오답입니다.\n 테스트를 종료합니다.\n 맞은 문항 :" + right);
          location.href="test.php";
        }
        }
      }
    }
  });
}
</script>
