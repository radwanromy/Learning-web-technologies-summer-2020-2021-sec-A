<?php
	session_start();
	require_once('session_header.php');
	require_once('subDb.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			header('login.php?error=null_value');
		}else{

			$user = [
				'username'=>$username,
				'password'=>$password,
			];
			
			$status = validate($user);

			if($status){
				$_SESSION['username'] = $username;
				header('home.php');
			}else{
				header('login.php?error=invalid_user');
			}
		}
	}



?>