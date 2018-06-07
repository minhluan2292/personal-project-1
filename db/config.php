<?php 
$host='mysql.hostinger.vn';
$hostname='http://minhluan2292.esy.es';
$username='u276811496_luan';
$password='minh.chien.123';
$port='3306';


try 
{
    $dbh = new PDO("mysql:host=$host;port=$port/;dbname=u276811496_tt",$username,$password);

    //$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?> 