<?php 
	session_start();
	require_once('session_header.php');
	require_once('subDb.php');


	//add user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('register.php?error=null_value');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
			];

			$status = insert($user);

			if($status){
				header('all_users.php?success=done');
			}else{
				header('create.php?error=db_error');
			}
		}
	}

	//update user
	if(isset($_POST['edit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('edit.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = update($user);

			if($status){
				header('all_users.php?success=done');
			}else{
				header('edit.php?id={$id}');
				header('edit.php?id={$id}');
			}
		}
	}

?>