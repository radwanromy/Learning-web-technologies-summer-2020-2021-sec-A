<?php
	
	if(isset($_REQUEST['submit'])){
		
		$dob = $_REQUEST['dob'];

		if($dob == ""){
			echo "invalid email!";
		}else{
			echo $dob;
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
		<form method="Request">

		<fieldset><legend>Date Of Birth</legend> <input type="date" name="dob" value="" /><br>
				<input type="submit" name="submit" value="Submit"></fieldset>
	</form>
</body>
</html>