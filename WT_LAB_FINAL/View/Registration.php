

<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" href="../CSS/style.css" />
 <script type="text/javascript" src="../JS/cursor.js">  </script>
</head>
	<body>
	</body>
	<table height = "50px" width = "100%"  border="0">
		<tr>
			<td> <section align ="right"><h2>
		 
				<a href = "../index.html">Home</a>|
				<a href = "Login.php">Login</a>|
				<a href="Registration.php"> Registration </a> </h2>
			</section>
			</td>
		</tr>
		<tr height = "150px">
			<td>
				<form action="../Controller/registrationck.php" method="post"  enctype="multipart/form-data">
		
    <legend align="center"><b>REGISTRATION</b></legend>
	<form>
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Employer Name</td>
				<td>:</td>
				<td><input name="ename" name = "ename" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="2"><br></td></tr>
			<tr>
				<td>Company name</td>
				<td>:</td>
				<td>
					<input name="cname" type="text">
				
				</td>
				<td></td>
			</tr>
				<tr><td colspan="2"><br></td></tr>
			<tr>
			
				<td>Contact Number</td>
				<td>:</td>
				<td>
					<input name="cno" type="number">
				
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="2"><br></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="uname" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="2"><br></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="pass" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="2"><br></td></tr>
			
			
		</table>
		<br>
		<input type="submit" name="submit" value="Submit">
		<input type="reset">
	</form>

                </form>
			</td>
		</tr>
		<tr>
			 <td align="center" colspan="2">
            
		        Developed by <a href="https://github.com/radwanromy" style="color: red;font-size:15px;">A. S. M. Radwan</a>
		    </td>
		</tr>
		
	</table>
</html>