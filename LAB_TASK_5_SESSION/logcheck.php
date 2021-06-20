<?php
	session_start();

	if(isset($_GET['submit']))
    {

		$uname= $_GET['uname'];
		$password= $_GET['password'];
        //$remember= $_POST['check'];

		if($uname != '' && $password != '')
        {
			if($_SESSION['user']['uname'] == $uname && $_SESSION['user']['password'] == $password){
					$_SESSION['flag'] = 'true';
					header('location: Dashboard.php');
			}else{
				echo 'invlaid username/password';
			}

		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}

?>