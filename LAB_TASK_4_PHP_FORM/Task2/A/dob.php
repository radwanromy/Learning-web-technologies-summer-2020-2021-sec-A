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