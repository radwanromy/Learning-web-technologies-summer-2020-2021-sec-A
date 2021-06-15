<?php
	
	if(isset($_REQUEST['submit'])){
		
		$gender = $_REQUEST['bg'];

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
	      <fieldset> <legend> Blood Group</legend><br>

      <select name="bg">
							<option value="">A+</option>
							<option value="">B+</option>
							<option value="">AB+</option>
							<option value="">O+</option>
							<option value="">A-</option>
							<option value="">B-</option>
							<option value="">AB-</option>
							<option value="">O-</option>
						</select><br>
     <input type="submit" name="" value="Submit" placeholder="">
   </fieldset> 
	</form>
</body>
</html>