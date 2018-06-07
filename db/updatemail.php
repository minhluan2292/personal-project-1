<?php
	require "config.php";

	$id = $_GET['id'];
	$mail = $_GET['mail'];
	$statement = $dbh->prepare("UPDATE contactout SET email=:email WHERE id=:id");
    $statement->bindParam(":email", $mail, PDO::PARAM_STR);
    $statement->bindParam(":id", $id, PDO::PARAM_STR);
  $statement->execute();
	
    $dbh = null;
    
?>