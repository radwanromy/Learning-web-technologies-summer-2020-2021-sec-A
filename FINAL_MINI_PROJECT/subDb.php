<?php
	require_once('db.php');

	function getByID($id){
		$conn = getConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllUser(){
		$conn = getConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}


	function validate($user){
		$conn = getConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 )
        {
			return true;
		}else{
			return false;
		}
	}


	function insert($user){
		$conn = getConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into users values('', '{$user['username']}','{$user['password']}', '{$user['email']}', 'admin')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function update($user){
		$conn = getConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function checkEmail($email)
	{
			$conn = getConnection();
		$sql = "select * from users where email='{$email}'";
		if(mysqli_query($conn, $sql)){
			return true;
			$result=mysqli_query($conn, $sql);
			$user = mysqli_fetch_assoc($result);
			if(empty($user)){
			return false;
			}
			else
			{
				return true;
			}
		}else{
			return false;
		}
	}


?>