<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width" , initial-scale="1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<title>기사</title>
</head>
<link rel="stylesheet" href="css/main.css">
  <body class="light">
    <header class="cd-header">
  <div class="header-wrapper">
    <div class="logo-wrap">
      <?php
        session_start();
        if(isset($_SESSION['nickname']) == false){
      ?>
      <a href = "main.php"><input type = "button" class = "btn btn-sm animated-button victoria-one" value = "Home"></a>
      <a href = "test.php"><input type = "button" class = "btn btn-sm animated-button victoria-one" value = "Test"></a>
      <a href = "download.php"><input type = "button" class = "btn btn-sm animated-button victoria-one" value = "Download"></a>
      <a href = "#"><input type = "button" class = "btn btn-sm animated-button victoria-one" value = "Admin" onclick="NotAdmin();"></a>
      <a href = "login.php"><input type = "button" class = "btn btn-sm animated-button victoria-one" value = "로그인"></a>
      <a href = "join.php"><input type = "button" class = "btn btn-sm animated-button victoria-one" value = "회원가입"></a>
      <?php
    }else if(isset($_SESSION['nickname']) == true){
      ?>
        <a href = "#"><input type = "button" class = "btn btn-sm animated-button victoria-one" value = <?php echo $_SESSION['nickname']?>님!></a>
        <a href = "main.php"><input type = "button" class = "btn btn-sm animated-button victoria-one" value = "Home"></a>
        <a href = "test.php"><input type = "button" class = "btn btn-sm animated-button victoria-one" value = "Test"></a>
        <a href = "download.php"><input type = "button" class = "btn btn-sm animated-button victoria-one" value = "Download"></a>
        <?php
        if($_SESSION['nickname'] == "관리자"){
          ?>
          <a href = "administrator.php"><input type = "button" class = "btn btn-sm animated-button victoria-one" value = "Admin"></a>
        <?php
      }else{
        ?>
        <a href = "#"><input type = "button" class = "btn btn-sm animated-button victoria-one" value = "Admin" onclick="NotAdmin();"></a>
        <?php
      }
         ?>
        <a href = "logout.php"><input type = "button" class = "btn btn-sm animated-button victoria-one" value = "로그아웃"></a>
      <?php
      }
      ?>
      <a href="main.php" class="hover-target"><span>기사 </span><span style="color : black;"> AlphaGo</span></a>
    </div>
  </div>
</header>
  </body>
<script language="javascript">
function NotAdmin(){
  alert("관리자만 접근할수 있습니다.");
}
</script>
</html>
