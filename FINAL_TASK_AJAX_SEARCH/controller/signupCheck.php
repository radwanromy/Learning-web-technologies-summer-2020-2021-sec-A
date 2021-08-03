<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_REQUEST['username'];
		$password= $_POST['password'];
		$email= $_POST['email'];
		$type= $_POST['type'];

		if($username != '' && $password != '' && $email != ''){
			
			if(strlen($password) >= 5){
				
				$user = $username."|".$password."|".$email."|".$type;
				$file = fopen('users.txt', 'w');
				fwrite($file, $user);
				fclose($file);
				header('location: ../view/login.php');

			}else{
				header('location: ../view/signup.php?msg=password_error');
			}
		}else{
			header('location: ../view/signup.php?msg=null');
		}
	}else{
		echo "invalid request...";
	}

?>