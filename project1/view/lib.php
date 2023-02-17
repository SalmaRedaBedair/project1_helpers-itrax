<?php
require_once('connection.php');
try {
    if (isset($_GET['me'])){
        $me=$_GET['me'];
        // $result=$connection->query("SELECT * FROM `user` WHERE id=$me");
        // $data=$result->fetch(PDO::FETCH_ASSOC);
        update($_POST['id'], $_POST['name'], $_POST['password'], $_POST['email'],$_GET['me']);
        die();
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
try {
    if (isset($_POST['name'])){
        register($_POST['id'], $_POST['name'], $_POST['password'], $_POST['email']);
        die();
    }

} catch (Exception $e) {
    echo $e->getMessage();
}
function register($id, $name, $pass, $email)
{
    global $connection;
    if (isset($id)) {
        $sql = $connection->query("INSERT INTO `user`(`id`, `name`, `email`, `password`) VALUES ($id,'$name','$email','$pass')");
        $number_of_rows = $sql->rowCount();
        if ($number_of_rows > 0)
            header("LOCATION: register.php?id=$id");
    }

}
function update($id, $name, $pass, $email,$me)
{
    global $connection;
    
    if (isset($id)) {
        $sql = $connection->query("UPDATE `user` SET `id`=$id,`name`='$name',`email`='$email',`password`='$pass' WHERE `id`=$me");
        header("LOCATION: show.php?id2=$id");
    }

}