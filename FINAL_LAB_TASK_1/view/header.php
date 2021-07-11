<?php
	session_start();
	if(!isset($_COOKIE['flag'])){
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
</head>
<body>
	<center>