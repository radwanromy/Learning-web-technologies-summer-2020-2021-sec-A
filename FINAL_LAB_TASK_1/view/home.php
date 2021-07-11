	<?php
		$title = 'Home page';
		require_once('header.php');

		$_SESSION['users'] = [
			['id'=>1, 'name'=>'alamin', 'email'=>'alamin@gmail.com', 'dept'=>'SE'],
			['id'=>2, 'name'=>'xyz', 'email'=>'xyz@gmail.com', 'dept'=>'CSE'],
			['id'=>3, 'name'=>'abc', 'email'=>'abc@gmail.com', 'dept'=>'CS'],
			['id'=>4, 'name'=>'pqr', 'email'=>'pqr@gmail.com', 'dept'=>'CSE']
		];

	?>

	<h1>Welcome home! <?=$_SESSION['username']?> </h1>

	<nav>
		<a href="create.php">Create User</a> |
		<a href="view_users.php">View Users</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>

	<br>
	<br>
	<br>

	<div>
		
	</div>

<?php include('footer.php'); ?>