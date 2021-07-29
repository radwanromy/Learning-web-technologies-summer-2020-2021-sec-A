<?php
	require_once('session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome Home!<?=$_SESSION['username']?></h1> 
	<a href="create.php">Create New User</a> |
	<a href="all_users.php">User List</a> |
	<a href="logout.php">Logout</a> 
</body>
</html>