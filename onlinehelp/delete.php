<?php
$db=mysqli_connect('localhost','root','','techsup');
$id=array_keys($_GET)[0];
$table =$_GET[array_keys($_GET)[1]];

$query="DELETE FROM `$table` WHERE `$table`.`$id` = '$_GET[$id]'";
mysqli_query($db, $query);
header('location:profile.php');
?>