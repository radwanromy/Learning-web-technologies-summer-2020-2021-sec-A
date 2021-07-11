<?php
	session_start();
if(isset($_REQUEST['create'])){
		//$data = $_REQUEST['test'];

		$conn = mysqli_connect('localhost', 'root', '', 'webtech');

		/*if($conn){
			echo "Database connected...";
		}else{
			echo "Connection error...";
		}*/

		$sql = "insert * from users";
		$result = mysqli_query($conn, $sql);

		$table = "<table border=1>
					<tr>
						<td>ID</td>
						<td>Username</td>
						<td>Password</td>
						<td>Email</td>
						<td>Type</td>
					</tr>";

		while ($data = mysqli_fetch_assoc($result)){
			$table .= 	"<tr>
							<td>{$data['id']}</td>
							<td>{$data['username']}</td>
							<td>{$data['password']}</td>
							<td>{$data['email']}</td>
							<td>{$data['type']}</td>
						</tr>";
		}

		$table .= "</table>";
		
		echo $table;
		mysqli_close($conn);
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
                array_pop($u);
				break;
			}
		}
        array_pad($users, $user);

		$_SESSION['users'] = $users;
		header('location: ../view/view_users.php');
	}


	if(isset($_REQUEST['delete'])){

		$id	= $_REQUEST['id'];
	
		$users = $_SESSION['users'];
		
		//delete by ref...
		foreach ($users as $u) {
			if($u['id'] == $id){
                array_pop($users);
				unset($u);
				break;
			}
            
		}
        

		$_SESSION['users'] = $users;
		header('location: ../view/view_users.php');
	}


?>