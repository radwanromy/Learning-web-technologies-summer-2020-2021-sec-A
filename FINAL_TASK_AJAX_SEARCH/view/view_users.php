<?php
	$title="View Users";
	include 'header.php';
	require_once('../model/usersModel.php');
	$users = getAllUser();
?>

	<h1>User List</h1>

	<nav>
		<a href="home.php">Back</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>
	
	<br>

	<div>
		<table border="1">
			<tr>
				<td>ID</td>
				<td>Username</td>
				<td>Password</td>
				<td>Email</td>
				<td>Type</td>
				<td>Action</td>
			</tr>

			<?php  for($i=0; $i<count($users); $i++){ ?>
				<tr>
					<td><?=$users[$i]['id']?></td>
					<td><?=$users[$i]['username']?></td>
					<td><?=$users[$i]['password']?></td>
					<td><?=$users[$i]['email']?></td>
					<td><?=$users[$i]['type']?></td>
					<td>
						<a href="edit.php?id=<?=$users[$i]['id']?>">Edit</a> |
						<a href="delete.php?id=<?=$users[$i]['id']?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
			
		</table>
	</div>

	<br>
	<br>
	<br>

<?php
	include 'footer.php';
?>