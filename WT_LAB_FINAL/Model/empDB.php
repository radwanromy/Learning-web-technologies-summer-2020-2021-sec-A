<?php
	
	require_once('db.php');


	function insertEmp($emp){
		$conn = getConnection();
		$sql = "insert into jobportal values('eid','{$emp['ename']}', '{$emp['cname']}', '{$emp['cno']}', '{$emp['uname']}', '{$emp['pass']}')";
		 header('location: ../View/home.php');
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
function getEmp($username){
		$conn = getConnection();
		$sql = "select * from jobportal where uname = '{$uname}'";
		$result = mysqli_query($conn, $sql);
        
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function searchEmp($username){
		$conn = getConnection();
		$sql = "select * from jobportal where uname like '$uname%'";
		$result = mysqli_query($conn, $sql);
        
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllEmp(){
		$conn = getConnection();
		$sql = "select * from jobportal";
		$result = mysqli_query($conn, $sql);
		$emps = [];
		//$profit = [];
		//$value = 0;
		//$count = 1;
		
		while ($row = mysqli_fetch_assoc($result)) {
			
			/*if($row[$count]['buying_price'] >= $row[$count]['selling_price']){
				$value = $row[$count]['buying_price'] - $row[$count]['selling_price'];
			} else{
				$value = $row[$count]['selling_price'] - $row[$count]['buying_price'];
			}*/
			//$count++;
			
			//$value = $row[$count]['selling_price'] - $row[$count]['buying_price'];
			array_push($emps, $row);
			//array_push($profit, $value);
		}
		
		return $emps;
	}

	function updateEmp($emp){
		$conn = getConnection();
		$sql = "update jobportal set eid='{$emp['eid']}',ename='{$emp['ename']}', cname='{$emp['cname']}', cno='{$emp['cno']}'	, uname='{$emp['uname']}', pass='{$emp['pass']}'
 where eid={$emp['eid']}";
		 header('location: ../View/home.php');
		if(mysqli_query($conn, $sql)){
			return true;
            header('location: ../View/home.php');
		}else{
			return false;
            header('location: ../View/home.php');
		}
          header('location: ../View/home.php');
	}

	function deleteRoom($uname){
		$conn = getConnection();
		$sql = "delete from jobportal where uname='{$uname}'";
        header('location: ../View/home.php');

		if(mysqli_query($conn, $sql)){
			return true;
            header('location: ../View/home.php');
		}else{
			return false;
            header('location: ../View/home.php');
		}
	}

?>