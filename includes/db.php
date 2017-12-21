<?php
ob_start();

if(!isset($_SESSION)){
    session_start();
}

	$server = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'crud';
	
	$conn = mysqli_connect($server, $user, $password, $db);
	
	if(!$conn){
		die("Connection Failed!:".mysqli_connect_error());
	}

?>