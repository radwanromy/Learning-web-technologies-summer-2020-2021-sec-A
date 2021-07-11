<?php

	if(isset($_REQUEST['submit'])){
		$data = $_REQUEST['test'];

		$conn = mysqli_connect('localhost', 'root', '', 'webtech');

		/*if($conn){
			echo "Database connected...";
		}else{
			echo "Connection error...";
		}*/

		$sql = "select * from users";
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
    	if(isset($_REQUEST['create'])){
		$data = $_REQUEST['test'];

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
		//$data = $_REQUEST['test'];

		$conn = mysqli_connect('localhost', 'root', '', 'webtech');

		/*if($conn){
			echo "Database connected...";
		}else{
			echo "Connection error...";
		}*/

		$sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `type`) ";
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



?>