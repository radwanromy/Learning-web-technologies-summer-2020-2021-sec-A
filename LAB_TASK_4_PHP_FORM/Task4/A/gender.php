<?php
	
	if(isset($_REQUEST['submit'])){
		
		$dob = $_REQUEST['Degree'];

		if($dob == ""){
			echo "invalid email!";
		}else{
			echo $dob;
		}

	}else{
		echo 'invalid request';
	}
?>