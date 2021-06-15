<?php
	
	if(isset($_REQUEST['submit'])){
		
		$email = $_REQUEST['email'];

		if($email == ""){
			echo "invalid email!";
		}else{
			echo $email;
		}

	}else{
		echo 'invalid request';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
</head>
<body>
	<form method="REQUEST" action="email.php">
		<fieldset><legend>Email</legend> <input type="email" name="email" value="" /><br>
				<input type="submit" name="submit" value="Submit"></fieldset>
	</form>
</body>
</html>