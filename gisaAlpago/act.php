<?php

	try {
		$param1 = $_POST['param1'];
		$param2 = $_POST['param2'];
		$param3 = $_POST['param3'];
		$conn = mysqli_connect("localhost", "root", "1234", "php", 3307);
		mysqli_select_db($conn, "php");
		if($param3 == 10){
			if($param2 !=6){
			$stmt = $conn -> prepare("SELECT *  FROM Questions WHERE Type = :type ORDER BY RAND() limit 12");
			//$query = "SELECT *  FROM Questions WHERE Type = '{$_POST['param2']}' ORDER BY RAND() limit 12";
			}else if($param2 == 6){
			$stmt = $conn -> prepare("SELECT *  FROM Questions ORDER BY RAND() limit 12");
			//$query = "SELECT *  FROM Questions ORDER BY RAND() limit 12";
			}
		}else if($param3 == 20){
			if($param2 !=6){
			$stmt = $conn -> prepare("SELECT *  FROM Questions WHERE Type = :type ORDER BY RAND() limit 22");
			//$query = "SELECT *  FROM Questions WHERE Type = '{$_POST['param2']}' ORDER BY RAND() limit 22";
			}else if($param2 == 6){
			$stmt = $conn -> prepare("SELECT *  FROM Questions ORDER BY RAND() limit 22");
			//$query = "SELECT *  FROM Questions ORDER BY RAND() limit 22";
			}
		}else if($param3 == 30){
			if($param2 !=6){
			$stmt = $conn -> prepare("SELECT *  FROM Questions WHERE Type = :type ORDER BY RAND() limit 32");
			//$query = "SELECT *  FROM Questions WHERE Type = '{$_POST['param2']}' ORDER BY RAND() limit 32";
			}else if($param2 == 6){
			$stmt = $conn -> prepare("SELECT *  FROM Questions ORDER BY RAND() limit 32");
			//$query = "SELECT *  FROM Questions ORDER BY RAND() limit 32";
			}
		}else if($param3 == 40){
			if($param2 !=6){
			$stmt = $conn -> prepare("SELECT *  FROM Questions WHERE Type = :type ORDER BY RAND() limit 42");
			//$query = "SELECT *  FROM Questions WHERE Type = '{$_POST['param2']}' ORDER BY RAND() limit 42";
			}else if($param2 == 6){
			$stmt = $conn -> prepare("SELECT *  FROM Questions ORDER BY RAND() limit 42");
			//$query = "SELECT *  FROM Questions ORDER BY RAND() limit 42";
			}
		}else if($param3 == 50){
			if($param2 !=6){
			$stmt = $conn -> prepare("SELECT *  FROM Questions WHERE Type = :type ORDER BY RAND() limit 52");
			//$query = "SELECT *  FROM Questions WHERE Type = '{$_POST['param2']}' ORDER BY RAND() limit 52";

			}else if($param2 == 6){
			$stmt = $conn -> prepare("SELECT *  FROM Questions ORDER BY RAND() limit 52");
			}
		}
		$stmt -> bindParam(':type', $param2, PDO::PARAM_STR);
		$stmt -> execute();
		$result = $stmt -> fetchAll(PDO::FETCH_NUM);
		$data['success']	= true;
		$data['content']	= $result[$param1][1];
		$data['img'] = $result[$param1][2];
		$data['choice1']	= $result[$param1][3];
		$data['choice2']	= $result[$param1][4];
		$data['choice3']	= $result[$param1][5];
		$data['choice4']	= $result[$param1][6];
		$data['correct']	= $result[$param1][7];
		if($result[$param1][8] == 1){
			$data['type']	= "데이터 베이스";
		}else if($result[$param1][8] == 2){
			$data['type']	= "전자 계산기 구조";
		}else if($result[$param1][8] == 3){
			$data['type']	= "운영 체제";
		}else if($result[$param1][8] == 4){
			$data['type']	= "소프트웨어 공학";
		}else if($result[$param1][8] == 5){
			$data['type']	= "데이터 통신";
		}
		$data['year']	= $result[$param1][9];
		$data['turn']	= $result[$param1][10];
	} catch(exception $e) {
		$data['success']	= false;
		$data['msg']		= $e->getMessage();
		$data['code']		= $e->getCode();
	} finally {
		echo json_encode($data, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
	}
  ?>
