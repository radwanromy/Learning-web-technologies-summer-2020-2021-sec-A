<?php
	
	if(isset($_REQUEST['submit'])){
		
		$gender = $_REQUEST['gender'];

		if($gender == ""){
			echo "invalid !";
		}else{
			echo $gender;
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
		<form method="REQUEST">
		<fieldset> <legend>Gender</legend><br>
       <input type="radio" name="gender" value="" placeholder=""> Male
       <input type="radio" name="gender" value="" placeholder=""> Female
       <input type="radio" name="gender" value="" placeholder=""> Other <br>
   </fieldset>  <input type="submit" name="" value="Submit" placeholder="">
	</form>
</body>
</html>