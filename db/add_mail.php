<?php
	require "config.php";

	$lk = $_GET['lk'];
	$name = $_GET['name'];
	$time = new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh'));
	
	if(strcmp("",$lk) == 0)
	{
		echo "rong";
	}
	else
	{
		$statement = $dbh->prepare("INSERT INTO contactout(linkedin, name, time) VALUES(?, ?, ?)");

		$statement->execute(array($lk, $name, $time->format('d-m-Y H:i:s')));
	}
	
	
    $dbh = null;
    
?>