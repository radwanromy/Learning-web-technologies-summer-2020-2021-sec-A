
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
<form action="logcheck.php" method="POST">
	<table>
		<tr>
			
			<td>
				User Id<br>
				<input type="text"  name="UserName" >
			</td>
		</tr>
		<tr>
			
			<td>
				Password<br>
			
				<input type="password" name="Password"
				>
			</td>


		</tr>
        <tr>
        	<td>
        		<input  type="checkbox" name="checkRemember"><i>Remember Me</i>
        	</td>
        </tr>
			
			 
			
		<tr>
			<td>
			<input type="Submit" value="Login" name="submit">
			<a href="Registration.php"><u>Register</u></a>
		</td>
		</tr>


	</table>

</form>
</body>
</html>