<?php 

if(!isset($_COOKIE['user']))
{
    header('LOCATION: login.php');
    die();
}
include_once('up.php');
include_once('down.php');
?>