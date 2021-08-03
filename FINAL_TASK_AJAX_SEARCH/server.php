
	<?php

	require_once('../model/usersModel.php');
    $data = $_POST['mydata'];
	$mydata = json_decode($data);
	$myarray =getAllUser();
	header('Content-type: application/json');
	echo json_encode($myarray);
    const json = getAllUser(); 
?>

	
