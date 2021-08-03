<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

	<style type="text/css">
		body {
			background-color: green;
		} 
		h3{
			color:blue;
		}

		#head1{
			color: yellow
		}
	</style>

</head>
<body>
		<h3 id="head1">Login Page</h3>
		<h3 id="head2">test</h3>

		<div id="d1">
			
		</div>

		<form method="post" action="../controller/loginCheck.php">
			<fieldset>
				<legend>Login</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>