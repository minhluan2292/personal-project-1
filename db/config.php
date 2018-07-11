<?php 
$host='mysql.hostinger.vn';
$hostname='https://studyingjs.herokuapp.com';
$username='u276811496_luan';
$password='minh.chien.123';
$port='3306';


try 
{
    //$dbh = new PDO("mysql:host=$host;port=$port/;dbname=u276811496_tt",$username,$password);
    $dbh = new PDO("mysql:dbname=u276811496_tt;host=$host:$port;charset=utf8",$username,$password);

    //$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?> 