<?php

if ( 0 < $_FILES['img']['error'] ) {
        echo 'Error: ' . $_FILES['img']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['img']['tmp_name'], 'upload/' . $_FILES['img']['name']);
    }

try{
  $conn = mysqli_connect("localhost", "root", "1234", "php", 3307);
  mysqli_select_db($conn, "php");
  $query = "insert into questions (Content, FileName, Choice1, Choice2, Choice3, Choice4, CorrectAnswer, Type, Year, Turn) values ('{$_POST['question']}','{$_FILES['img']['name']}','{$_POST['multiplechoice1']}','{$_POST['multiplechoice2']}','{$_POST['multiplechoice3']}','{$_POST['multiplechoice4']}','{$_POST['correct']}','{$_POST['type']}','{$_POST['year']}','{$_POST['turn']}')";
  $result = mysqli_query($conn, $query);
}catch (PDOException $e){
  echo $e.ErrorException;
}
 ?>
