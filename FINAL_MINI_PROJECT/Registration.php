<!DOCTYPE html>
<html>
<head>
	<body>
	</body>
	
				<form action="Regcheck.php" method="post">
				<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form>
		<br/>
		
			
				Id<br>
				
		         <input Id="Id" name = "Id" type="text"><br>
		     Passsword<br>
				
		         <input Password="password" name = "password" type="text">
				
				<br>
			    
				
				Confirm Password<br>
				<input name="confirmPassword" type="password"><br>
					
			 Name<br>
				
				<input name="Name" type="text"><br>
				Email	<br>		
					<input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				
					
		            User Type [<i>User/Admin</i>]<br>
			<select name="userType">
						<option value="user">User</option>
						<option value="admin">Admin</option>
						
					
		<br><input type="submit" name="submit" value="Register">
		<a href = "Login.html">Login</a>|
        </select>
	</form>
    </fieldset>
    </form>
	</head>
</html>



