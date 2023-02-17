<?php

if(!isset($_COOKIE['user']))
{
    header('LOCATION: login.php');
    die();
}
include_once('up.php');
require_once('lib.php');
// echo'number'. $_GET['n'];
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>register Form</strong>
        </div>
        <div class="card-body card-block">
            <form action="lib.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">id</label></div>
                    <div class="col-12 col-md-9"><input type="number" id="id" name="id" placeholder="Enter id"
                            class="form-control">
                        <small class="form-text text-muted">This is a help text</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="name" placeholder="Enter name"
                            class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label>
                    </div>
                    <div class="col-12 col-md-9"><input type="email" id="disabled-input" name="email"
                            placeholder="Enter Email" class="form-control"><small class="help-block form-text">Please
                            enter your email</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label>
                    </div>
                    <div class="col-12 col-md-9"><input type="password" id="password-input" name="password"
                            placeholder="Enter Password" class="form-control"><small class="help-block form-text">Please enter
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