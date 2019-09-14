  <?php
   include 'index.php';
  ?>
	<form action="joinPro.php" method="post" onsubmit="return a();" style="margin-left : 200px; margin-top : 150px;">
	   <BR><BR><BR>

	      <div class="container">
	         <div class="form-row">
	            <div class ="form-group col-sm-1"></div>
	            <div class ="form-group col-sm-3"><strong style="color : black">사용자 닉네임</strong><br><input type="text" class="form-control" placeholder="닉네임"	name="nickname" id="nick123"><span id="result_nick"></span></div>
	             <div class ="form-group col-sm-1"></div>
               <div class ="form-group col-sm-1"></div>
               <div class ="form-group col-sm-3"><strong style="color : black">E-mail</strong><br><input type="email" class="form-control" placeholder="Email" name="email" id="email123"><span id="result_email"></span></div>
	             <div class ="form-group col-sm-1"></div>
	             <div class ="form-group col-sm-1"></div>
	             <div class ="form-group col-sm-1"></div>
	          </div>
	      </div>

	      <div class="container">
	         <div class="form-row">
	<div class ="form-group col-sm-1"></div>
	<div class ="form-group col-sm-3"><strong style="color : black">이 름</strong><input type="text" class="form-control" placeholder="이름"	name="name"></div>
	<div class ="form-group col-sm-1"></div>
	<div class ="form-group col-sm-1"></div>
	<div class ="form-group col-sm-3"><strong style="color : black">Password</strong><input type="password" class="form-control" placeholder="비밀번호" name="password"></div>
	<div class ="form-group col-sm-1"></div>
	<div class ="form-group col-sm-1"></div>
	<div class ="form-group col-sm-1"></div>
	</div>
	</div>
    <div class="container">
	<div class="form-row">
	<div class ="form-group col-sm-1"></div>
	<div class ="form-group col-sm-3"></div>
	<div class ="form-group col-sm-1"></div>
	<div class ="form-group col-sm-1"></div>
	<div class ="form-group col-sm-3"><strong style="color : black">Password Confirm</strong><br><input type="password" class="form-control" placeholder="비밀번호확인" name="pw_confirm"></div>
	<div class ="form-group col-sm-1"></div>
	<div class ="form-group col-sm-1"></div>
	<div class ="form-group col-sm-1"></div>
	</div>
	</div>
	<BR>
	<BR>
	<BR>
	<center><input type="submit" class="btn btn-primary" value="완료"></center>
    </form>
</body>
<script type="text/javascript">

var checkNickname = 1;
var checkEmail = 1;

$(document).ready(function(){
    $('#nick123').keyup(function(){
    	var id = $('#nick123').val();
      $.ajax({
         type:'POST',
         url:'Check',
         data: 'id=' + id,
         success:function(data)
         {
        	 if(data.a == 1){
        		 $('#result_nick').html(data.result);
        		 checkNickname = 0;
        	 }else{
        		 $('#result_nick').html(data.result123);
        		 checkNickname = 1;
        	 }
         }
       });
    });
});

$(document).ready(function(){
    $('#email123').keyup(function(){
    	var email = $('#email123').val();
      $.ajax({
         type:'POST',
         url:'CheckE',
         data: 'email=' + email,
         success:function(data)
         {
        	 if(data.a == 1){
        		 $('#result_email').html(data.result);
        		 checkEmail = 0;
        	 }else{
        		 $('#result_email').html(data.result123);
        		 checkEmail = 1;
        	 }
         }
       });
    });
});

function a(){

	var nickname = document.forms[0].nickname.value;
	var name = document.forms[0].name.value;
	var email = document.forms[0].email.value;
	var pw = document.forms[0].password.value;
	var pw_confirm = document.forms[0].pw_confirm.value;

	if (nickname == null || nickname == "") {
		alert("닉네임을 입력하세요.");
		document.forms[0].nickname.focus();
		return false;
	}

	if (name == null || name == "") {
		alert("이름을 입력하세요.");
		document.forms[0].name.focus();
		return false;
	}

	if (email == null || email == "") {
		alert("E-Mail을 입력하세요.");
		document.forms[0].email.focus();
		return false;
	}

	if (pw == null || pw == "") {
		alert("비밀번호을 입력하세요.");
		document.forms[0].password.focus();
		return false;
	}

	if (pw_confirm == null || pw_confirm == "") {
		alert("비밀번호 확인을 해주세요.");
		document.forms[0].pw_confirm.focus();
		return false;
	}

	if (pw != pw_confirm) {
		alert("비밀번호가 일치하지 않습니다!");
		document.forms[0].pw.focus();
		return false;
	}

	if(checkEmail == 0){
		alert("중복된 이메일 입니다.");
		return false;
	}
	if(checkNickname == 0){
		alert("중복된 닉네임 입니다.");
		return false;
	}
	if(checkEmail == 1 && checkNickname == 0){
		return true;
	}
	return true;
}
</script>
</html>
