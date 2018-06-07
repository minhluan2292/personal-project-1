<?php
	require "config.php";
	header('Content-Type: application/json');
	
	$id = $_GET['id'];
	$pass = $_GET['pass'];


	$response  = ['check'=>'failed'];
    $sql = "SELECT * FROM account";
	foreach ($dbh->query($sql) as $row)
	{
		if(strcmp($row["id"],$id) == 0 && strcmp($row["pass"],$pass) == 0)
		{
			$response  = array(check=>'success','id'=>$row["id"],'pass'=>$row["pass"],'email'=>$row["email"],'state'=>$row["status"]);
			break;
		}
    }
    $dbh = null;
    echo json_encode($response);
?>
