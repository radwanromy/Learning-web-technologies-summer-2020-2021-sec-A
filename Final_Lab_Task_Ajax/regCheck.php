<?php 
	session_start();
	require_once('subDb.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
        
		if(empty($username) || empty($password) || empty($email)){
             echo "Null";
			header('register.php?error=null_value');
		}else{
			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
			];

			$status = insert($user);

			if($status){
				header('login.php?success=registration_done');
			}else{
                echo "Null";
				header('register.php?error=db_error');
			}
		}
	}
?>