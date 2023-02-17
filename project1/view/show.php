<?php
if(!isset($_COOKIE['user']))
{
    header('LOCATION: login.php');
    die();
}
include_once('up.php');
require_once('connection.php');
$result=$connection->query("SELECT * FROM `user`");
$data=$result->fetchAll(PDO::FETCH_ASSOC);
// print_r($_COOKIE);
// die();
$my_id=$_COOKIE['user'];
$result2=$connection->query("SELECT * FROM `user` WHERE id=$my_id");
$data2=$result2->fetch(PDO::FETCH_ASSOC);
if(isset($_GET['n'])){
    ?>
    <div class="alert" style="background-color:#00bf00 ">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
      <strong>Done !</strong> deleted successfully.
    </div>
    <?php } else if(isset($_GET['m'])){?>
    <div class="alert" style="background-color:red ">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
      <strong>sorry !</strong> you cannot delete yourself.
    </div>
    <?php }
    else if(isset($_GET['id2'])){
?>
<div class="alert" style="background-color:#00bf00 ">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Done !</strong> updated successfully.
</div>
<?php }?>
<div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <?php
                if($data2['is_admin']==1){
                ?>
                <th scope="col">more actions</th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
    <?php
    foreach($data as $d){
    ?>
            <tr>
                <th scope="row"><?= $d['id'] ?></th>
                <td><?= $d['name'] ?></td>
                <td><?= $d['email'] ?></td>
                <?php
                if($data2['is_admin']==1){
                ?>
                <td ><a href='delete.php?id=<?=$d['id']?>' style="color: red; padding:2px;">delete</a><a href='update.php?id=<?=$d['id']?>' style="color: blue;padding:2px;">update</a></td>

                
                    <?php }?>

            </tr>
    <?php } ?>
        </tbody>
    </table>
</div>
<?php
include_once('down.php');
?>