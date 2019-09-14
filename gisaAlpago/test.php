<style media="screen">
  #testForm{
    position:absolute;
    margin-top:250px;
    margin-left:490px;
  }
</style>
<?php
  include 'index.php';
?>

<form action="testPro.php" method="post" id="testForm" onsubmit="return checkForm();">
  <h5 style="color : black;"><strong>문제 유형</strong></h5>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="question1" name="question" value="1">
    <label class="custom-control-label" for="question1" style="color: black;">데이터 베이스</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="question2" name="question" value="2">
    <label class="custom-control-label" for="question2" style="color: black;">전자 계산기 구조</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="question3" name="question" value="3">
    <label class="custom-control-label" for="question3" style="color: black;">운영체제</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="question4" name="question" value="4">
    <label class="custom-control-label" for="question4" style="color: black;">소프트웨어 공학</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="question5" name="question" value="5">
    <label class="custom-control-label" for="question5" style="color: black;">데이터 통신</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="question6" name="question" value="6">
    <label class="custom-control-label" for="question6" style="color: black;">상관없음</label>
  </div>
  <br>
  <br>
    <h5 style="color : black;"><strong>문항수</strong></h5>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="number1" name="number" value="10">
      <label class="custom-control-label" for="number1" style="color: black;">10문제</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="number2" name="number" value="20">
      <label class="custom-control-label" for="number2" style="color: black;">20문제</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="number3" name="number" value="30">
      <label class="custom-control-label" for="number3" style="color: black;">30문제</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="number4" name="number" value="40">
      <label class="custom-control-label" for="number4" style="color: black;">40문제</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="number5" name="number" value="50">
      <label class="custom-control-label" for="number5" style="color: black;">50문제</label>
    </div>
    <br>
    <br>
    <br>
    <center><input type="submit" class="btn btn-info" value ="시작" id="submitBtn"</center>
</form>
<script type="text/javascript">
function checkForm() {
  var question = $('input:radio[name=question]').is(':checked');
  var number = $('input:radio[name=number]').is(':checked');
  if(question == true && number == true){
    return true;
  }else if(question == false && number == true){
    alert("문제 유형 확인!");
    return false;
  }else if(question == true && number == false){
    alert("문항 수 확인!");
    return false;
  }else if(question == false && number == false){
    alert("문제 유형, 문항 수 확인!");
    return false;
  }
  return false;
}
</script>
