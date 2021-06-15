<?php
	
	if(isset($_REQUEST['submit'])){
		
		$email = $_REQUEST['email'];

		if($username == ""){
			echo "invalid email!";
		}else{
			echo $email;
		}

	}else{
		echo 'invalid request';
	}
?>