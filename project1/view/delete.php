<?php
// echo $_GET['id'];
// print_r($_COOKIE);
// die();

if(!isset($_GET['id']))
{
    header('LOCATION: index.php');
    die();
}
if(!isset($_COOKIE['user']))
{
    header('LOCATION: login.php');
    die();
}
require_once('connection.php');
$id=$_GET['id'];
if($id==$_COOKIE['user']){
    header('LOCATION: show.php?m=2');
    die();
}

$result=$connection->query("DELETE FROM `user` WHERE id=$id");
header('LOCATION: show.php?n=2');
?>