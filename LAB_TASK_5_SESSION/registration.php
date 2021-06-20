<?php
	session_start();

	if(isset($_POST['submit'])){

        $name       = $_POST['name'];
		$uname 		= $_POST['uname'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$gender     = $_POST['gender'];
		$day        = $_POST['day'];
		$month      = $_POST['month'];
		$year       = $_POST['year'];
        $picture    = $_POST['picture'];
        
		if($name != '' && $uname != '' && $password != '' && $email != '' && $gender !='' && $day != '' && $month != '' && $year != ''  )
        {
            $user =['name'=>$name, 'email'=>$email , 'uname'=> $uname , 'password'=>$password , 'picture'=>$picture, 'gender'=>$gender , 'day'=>$day , 'month'=>$month, 'year'=>$year ];
			$_SESSION['user'] = $user;
			header('location: Login.html');
		}else{
			echo "null value found...";
		}
	}else{
		header('location: Login.html');
	}

?>