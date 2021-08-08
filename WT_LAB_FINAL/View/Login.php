<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
</head>
<link rel="stylesheet" href="../CSS/style.css" />
 <script type="text/javascript" src="../JS/cursor.js">  </script>
	<body >
	

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
					<form action="../Controller/logcheck.php" method="POST">
				<fieldset>
					<legend><h2>Login</h2></legend>
					Username : <input type = "text" name="username" value=""><br><br>
					Password  :  <input type = "password" name="password" value=""><br><br> 
					<input type = "submit" name="submit" value="submit"> 			
					</fieldset>
                </form>
                <br>
			</td>
		</tr>
		
	</table>
   <center>
    Developed by <a href="https://github.com/radwanromy" style="color: red;font-size:15px;">A. S. M. Radwan</a>
   </center>
	  
	</body>
</html>