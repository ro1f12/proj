<?php require_once '../includes/header.php';
if(!isset($_SESSION['admin_id'])){
    header('location:index.php');
}
?>
<?php require_once '../includes/admin_nav.php';
?>



<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h2>Password Reset Form </h2>
        <p class="text-muted">Change Password </p>
        <div style="padding-bottom: 5px;">
            <a href="admin_dash.php" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Back</a>
        </div>

<div class="jumbotron">
<!--form-->
<div class="well well-lg">
                                <form action="changePasswordAction.php" method="post">
                                   
                                    <div class="alert-info text-center">
                                        <em>* Fields Are Required </em>
                                    </div>
                                    <!--place for error message flashing-->
                                    <div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="pass">CURRENT PASSWORD: <sup>*</sup></label>
                                        <input type="password" name="pass" class="form-control " placeholder="enter current password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_pass">NEW PASSWORD: <sup>*</sup></label>
                                        <input type="password" name="new_pass" id="new_pass" class="form-control " placeholder="enter new password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="con_pass">CONFIRM PASSWORD: <sup>*</sup></label>
                                        <input type="password" name="con_pass" id="con_pass" class="form-control"
                                               placeholder="confirm new password" required>
                                    </div>
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block">Update</button><br>
                                     <a href="admin_dash.php" class="btn btn-danger  btn-block">Cancel</a>
                                    </div>
                                </form>
<!--/form-->           
</div>
<div class="col-md-3"></div>
</div>

<hr>
<?php require_once '../includes/footer.php';?>