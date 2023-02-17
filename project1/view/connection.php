<?php
try {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'project1';
    $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
}catch(Exception $e){
    echo $e->getMessage();
    exit;

}
?>