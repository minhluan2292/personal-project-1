<?php
session_start();

require "config.php";

$stmt = $dbh->prepare("SELECT * FROM account WHERE status=1 and (`id` = :username) and (`pass` = :password)");

$result = $stmt->execute(array(':username'=>$_POST['username'],':password'=>$_POST['password']));

$num_rows = $stmt->rowCount();
echo $num_rows;
if ( $num_rows > 0) {
// Set username session variable
$_SESSION['username'] = $_POST['username'];
// Jump to secured page
  header('Location: http://minhluan2292.esy.es/?page=sharebookmark');
}
else
{
  header('Location: http://minhluan2292.esy.es/?page=login');
}
?>