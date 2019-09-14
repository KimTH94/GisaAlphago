<style>
#downloadForm{
  position:absolute;
  top:200px;
  left:200px;
}
</style>
<?php
  include 'index.php';
try{
  //$conn = new PDO('mysql:host=127.0.0.1:3307;dbname=php','root','1234');
  //$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $conn = mysqli_connect("localhost", "root", "1234", "php", 3307);
  mysqli_select_db($conn, "php");
  //$stmt = $conn -> prepare("SELECT * FROM AttachmentBoards");
  $query = "select * from AttachmentBoards";
  //$stmt -> execute();
  //$result = $stmt -> fetchAll(PDO::FETCH_NUM);
  $result1 = mysqli_query($conn, $query);
  $result = mysqli_fetch_all($result1);
  echo "<div id=\"downloadForm\">";
  echo "<h3><strong style = \"color : black;\">정보처리기사(필기) 문제 다운로드</strong></h3><br>";
  echo "<div class=\"form-row\">";
  for($i = 0; $i < count($result); $i++) {
        $name = $result[$i][3];
        echo "<div class =\"form-group col-sm-2\"><a href = \"./downloadPro.php?filename= $name\"<strong style = \"color : black;\">" .$result[$i][1] ."년&nbsp;&nbsp;&nbsp;" .$result[$i][2] ."회차" ."</strong></a></div>";
    }
  echo "</div>";
  echo "</div>";
  }catch (PDOException $e){
    echo $e.ErrorException;
    }
?>
