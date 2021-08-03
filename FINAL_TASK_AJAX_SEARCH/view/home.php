	<?php
		$title = 'Home page';
		require_once('header.php');

	?>
<html>
<head>
	<title>AJAX Example</title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	
	<h1>Welcome home! <?=$_SESSION['username']?> </h1>

	<nav>
		<a href="create.php">Create User</a> |
		<a href="view_users.php">View Users</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>

	<br>
	<br>
	<br>
		Input User Name To See His/her Info :
 <input type="text" id='name' name="name" value="" onkeypress="ajax()" />
		<div>
		
	</div>

</body>
</html>
	

<?php include('footer.php'); ?>