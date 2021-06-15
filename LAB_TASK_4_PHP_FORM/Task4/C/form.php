<?php
	
	if(isset($_REQUEST['submit'])){
		
		$gender = $_REQUEST['Degree'];

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
	   <fieldset> <legend> Degree</legend><br>
       <input type="checkbox" name="Degree" value=""> SSC 
						<input type="checkbox" name="Degree" value="">HSC
						<input type="checkbox" name="Degree" value=""> BSc
       
   </fieldset> <input type="submit" name="" value="Submit" placeholder="">
	</form>
</body>
</html>