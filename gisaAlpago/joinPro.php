<?php
try{
  /*$conn = new PDO('mysql:host=127.0.0.1:3307;dbname=php','root','1234');
  $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $stmt = $conn -> prepare("INSERT INTO Users (email, pw, name, nickname) VALUES (:email, :pw, :name, :nickname)");
  $stmt -> bindParam(':email', $_POST['email'], PDO::PARAM_STR);
  $stmt -> bindParam(':pw', $_POST['password'], PDO::PARAM_STR);
  $stmt -> bindParam(':name', $_POST['name'], PDO::PARAM_STR);
  $stmt -> bindParam(':nickname', $_POST['nickname'], PDO::PARAM_STR);
  $stmt -> execute();*/
  $conn = mysqli_connect("localhost", "root", "1234", "php", 3307);
  mysqli_select_db($conn, "php");
  $query = "insert into users (email, pw, name, nickname) values ('{$_POST['email']}','{$_POST['password']}','{$_POST['name']}','{$_POST['nickname']}')";
  $result = mysqli_query($conn, $query);
}catch (PDOException $e){
  echo $e.ErrorException;
}
  Header("Location:/index.php");
 ?>
