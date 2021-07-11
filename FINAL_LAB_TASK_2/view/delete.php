<?php
	$title="Delete Users";
	include 'header.php';
	require_once('../model/usersModel.php');
	$users = getAllUser();
?>


	<h1>Delet user</h1>

	<nav>
		<a href="home.php">Back</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>
	
	<br>
	<div>
		<form method="post" action="../controller/userController.php">
		<?php  for($i=0; $i<count($users); $i++){ ?>
			<input type="hidden" name="id" value="<?=$users[$i]['id']?>">
			<table border="1">
				<tr>
					<td>Name</td>
					<td><?=$users[$i]['username']?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?=$users[$i]['email']?></td>
				</tr>
				<tr>
					<td>type</td>
					<td>
					<?=$users[$i]['type']?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><h3>Are you sure?</h3></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="delete" value="Confirm"></td>
				</tr>
			</table>	<?php } ?>
		</form>
	</div>

	<br>
	<br>

<?php
	include 'footer.php';
?>