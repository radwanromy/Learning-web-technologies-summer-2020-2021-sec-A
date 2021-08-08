<?php
	session_start();
require_once('../Model/empDB.php');

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];

		if($username != '' && $password != ''){
			
			//$file = fopen('users.txt', 'r');
			//$data = fread($file, filesize('users.txt'));
			//$user = explode('|', $data);

			//$data = fgets($file);
			//$user = explode('|', $data);
			//feof($file);
            
  
	$emp = getEmp($username);
          
                

			if($emp['uname'] == $username && $emp['pass'] == $password){
            //if($_SESSION['user']['username'] == $username && $_SESSION['user']['password']== $password){
                    $_SESSION['flag'] = true;
                $_FILES['flag']['flag'] = true;
					setcookie('flag', 'true', time()+3600, '/');
                
                 
			 		header('location: ../View/home.php');
			}else{
				echo 'invlaid username/password';
			}
                }

		}else{
			echo "null value found...";
		}
	
?>