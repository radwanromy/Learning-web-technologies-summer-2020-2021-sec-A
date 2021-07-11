<?php
	$title="Create Users";
	include 'header.php';
	require_once('../model/usersModel.php');
	$users = getAllUser();
?>
	<h1>Create user</h1>

	<nav>
		<a href="home.php">Back</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>
	
	<br>
	<div>
		<form method="post" action="../mybackend.php">
		<?php  for($i=0; $i<count($users); $i++){ ?>
			<fieldset>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="<?=$users[$i]['username']?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="<?=$users[$i]['email']?>"></td>
					</tr>
					<tr>
						<td>Dept</td>
						<td>
							<select name="Type">
								<option <?php if($users[$i]['type'] == 'Admin'){echo "selected";}?> value="Admin">Admin</option>
								<option <?php if($users[$i]['type'] == 'User'){echo "selected";}?> value="User">User</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="create" value="Create"></td>
					</tr>
				</table>
			</fieldset>	<?php } ?>
		</form>
	</div>

	<br>
	<br>

<?php
	include 'footer.php';
?>