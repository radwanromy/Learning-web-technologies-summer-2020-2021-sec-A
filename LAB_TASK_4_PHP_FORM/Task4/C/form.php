<?php
	
	if(isset($_GET['submit'])){
		
		$gender = $_GET['gender'];

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
		<form method="GET">
		<fieldset> <legend>Gender</legend><br>
       <input type="radio" name="gender" value="" placeholder=""> Male
       <input type="radio" name="gender" value="" placeholder=""> Female
       <input type="radio" name="gender" value="" placeholder=""> Other <br>
   </fieldset>  <input type="submit" name="" value="Submit" placeholder="">
	</form>
</body>
</html>