<?php

if ( 0 < $_FILES['img']['error'] ) {
        echo 'Error: ' . $_FILES['img2']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['img2']['tmp_name'], 'upload2/' . $_FILES['img2']['name']);
    }

try{
  $conn = mysqli_connect("localhost", "root", "1234", "php", 3307);
  mysqli_select_db($conn, "php");
  $query = "insert into AttachmentBoards (Year, Turn, Attachment) values ('{$_POST['year2']}','{$_POST['turn2']}','{$_FILES['img2']['name']}')";
  $result = mysqli_query($conn, $query);
}catch (PDOException $e){
  echo $e.ErrorException;
}
 ?>
