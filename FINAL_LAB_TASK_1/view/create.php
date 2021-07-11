<?php
	$title="View Users";
	include 'header.php';

?>

	<h1>Create user</h1>

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
						<td>Name</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Dept</td>
						<td>
							<select name="dept">
								<option value="CSE">CSE</option>
								<option value="SE">SE</option>
								<option value="CS">CS</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="create" value="Create"></td>
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