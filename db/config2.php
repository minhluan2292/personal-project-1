<?php
$host='localhost';
$hostname='';
$username='root';
$password='';
$port='';


try 
{
    $dbh = new PDO("mysql:host=$host;port=$port/;dbname=l",$username,$password);

    //$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?> 