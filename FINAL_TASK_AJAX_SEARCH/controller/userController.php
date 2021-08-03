<?php
	session_start();

	if(isset($_REQUEST['create'])){

		$name 	= $_REQUEST['name'];
		$email 	= $_REQUEST['email'];
		$dept 	= $_REQUEST['dept'];

		//insert into file or database
		$users = $_SESSION['users'];
		$id = count($users)+1;
		$user = ['id'=>$id, 'name'=> $name, 'email'=> $email, 'dept'=> $dept];
		array_push($users, $user);
		$_SESSION['users'] = $users;

		header('location: ../view/view_users.php');
	}


	if(isset($_REQUEST['update'])){

		$id		= $_REQUEST['id'];
		$name 	= $_REQUEST['name'];
		$email 	= $_REQUEST['email'];
		$dept 	= $_REQUEST['dept'];

		$users = $_SESSION['users'];
		$user = ['id'=>$id, 'name'=> $name, 'email'=> $email, 'dept'=> $dept];
		
		//update by ref...
		foreach ($users as $u) {
			if($u['id'] == $id){
				$u = $user;
				break;
			}
		}

		$_SESSION['users'] = $users;
		header('location: ../view/view_users.php');
	}


	if(isset($_REQUEST['delete'])){

		$id	= $_REQUEST['id'];
	
		$users = $_SESSION['users'];
		
		//delete by ref...
		foreach ($users as $u) {
			if($u['id'] == $id){
				unset($u);
				break;
			}
		}

		$_SESSION['users'] = $users;
		header('location: ../view/view_users.php');
	}


?>