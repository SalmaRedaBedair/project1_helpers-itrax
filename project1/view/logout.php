<?php
if(!isset($_COOKIE['user']))
{
    header('LOCATION: login.php');
    die();
}
setcookie('user', $_COOKIE['email'], time()-1, "/");
header('LOCATION: login.php');
?>