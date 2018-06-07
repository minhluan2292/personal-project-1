<?php
	require "config.php";

	$user = $_GET['user'];
	$pass = $_GET['pass'];
	$email = $_GET['email'];
	

	$statement = $dbh->prepare("INSERT INTO account(id, pass, email,status) VALUES(?, ?, ?, ?)");
	$statement->execute(array($user, $pass, $email,"0"));

	
    $dbh = null;
    
?>