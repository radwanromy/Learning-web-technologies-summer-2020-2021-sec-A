<?php
	
	if(isset($_REQUEST['submit'])){
		
		$dob = $_REQUEST['bg'];

		if($dob == ""){
			echo "invalid email!";
		}else{
			echo $dob;
		}

	}else{
		echo 'invalid request';
	}
?>