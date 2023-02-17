<?php
if(!isset($_COOKIE['user']))
{
    header('LOCATION: login.php');
    die();
}
if(!isset($_GET['id']))
{
    header('LOCATION: index.php');
    die();
}
include_once('up.php');


require_once('connection.php');
if(isset($_GET['id'])){
$id=$_GET['id'];
// echo $_GET['id'];
// die();
$result=$connection->query("SELECT * FROM `user` WHERE id=$id");
// print_r($result);
// die();
$values=$result->fetch(PDO::FETCH_ASSOC);
}
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>register Form</strong>
        </div>
        <div class="card-body card-block">
            <form action="lib.php?me=<?=$id?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">id</label></div>
                    <div class="col-12 col-md-9"><input type="number" id="id" name="id" placeholder="Enter id"
                            class="form-control" value="<?= $values['id'] ?>">
                        <small class="form-text text-muted">This is a help text</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="name" placeholder="Enter name"
                            class="form-control" value="<?= $values['name'] ?>"><small class="form-text text-muted">This is a help text</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label>
                    </div>
                    <div class="col-12 col-md-9"><input type="email" id="disabled-input" name="email"
                            placeholder="Enter Email" class="form-control" value="<?= $values['email'] ?>"><small class="help-block form-text">Please
                            enter your email</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label>
                    </div>
                    <div class="col-12 col-md-9"><input type="password" id="password-input" name="password"
                            placeholder="Enter Password" class="form-control"value="<?= $values['password'] ?>"><small class="help-block form-text">Please enter
                            a complex password</small></div>
                </div>
            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
        </form>
    </div>
</div>
<?php
include_once('down.php');
?>