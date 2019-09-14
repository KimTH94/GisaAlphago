<?php
/*try{
  $conn = new PDO('mysql:host=127.0.0.1:3307;dbname=php','root','1234');
  $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $stmt = $conn -> prepare("SELECT pw, nickname FROM Users WHERE email = :email");
  $stmt -> bindParam("email", $_POST['email'], PDO::PARAM_STR) ;
  //$stmt->bindValue(':pw', "%{$pw}%");
  $stmt -> execute();
  $stmt -> setFetchMode(PDO::FETCH_ASSOC);
  while($row = $stmt -> fetch()){
    $pw = $row['pw'];
    $nickname = $row['nickname'];
    }
  $password = $_POST['password'];
  if($pw == $password){
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['nickname'] = $nickname;
    Header("Location:/index.php");
  }else if($pw != $password){
    Header("Location:/loginfalse.php");
    }
  }catch (PDOException $e){
    echo $e.ErrorException;
  }*/
  try {
    $conn = mysqli_connect("localhost", "root", "1234", "php", 3307);
    mysqli_select_db($conn, "php");
    $query = "select * from users where email = '{$_POST['email']}'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    if($row['pw'] == $_POST['password']){
      session_start();
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['nickname'] = $row['nickname'];
      //echo "로그인 성공";
      Header("Location:/main.php");
    }else{
      //echo "로그인 실패";
      Header("Location:/loginfalse.php");
      }
  } catch (\Exception $e) {
    echo $e.Exception;
  }
?>
