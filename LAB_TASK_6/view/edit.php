<?php
	$title="Edit Users";
	include 'header.php';
	$id = $_GET['id'];
	$users = $_SESSION['users'];
	$user = '';

	foreach ($users as $u) {
		if($u['id'] == $id){
			$user = $u;
			break;
		}
	}


?>

	<h1>Edit user</h1>

	<nav>
		<a href="home.php">Back</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>
	
	<br>
	<div>
		<form method="post" action="../controller/userController.php">
			<fieldset>
				<table>
					<tr>
						<td>Id</td>
						<td><?=$user['id']?></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value="<?=$user['name']?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="<?=$user['email']?>"></td>
					</tr>
					<tr>
						<td>Dept</td>
						<td>
							<select name="dept">
								<option <?php if($user['dept'] == 'CSE'){echo "selected";}?> value="CSE">CSE</option>
								<option <?php if($user['dept'] == 'SE'){echo "selected";}?> value="SE">SE</option>
								<option <?php if($user['dept'] == 'CS'){echo "selected";}?> value="CS">CS</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="update" value="Update"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<br>
	<br>

<?php
	include 'footer.php';
?>