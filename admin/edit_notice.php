
<?php require_once '../includes/header.php';
if(!isset($_SESSION['admin_id'])){
    header('location:index.php');
}
?>
<?php require_once '../includes/admin_nav.php';?>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h2>Notice</h2>
        <p class="text-muted">Edit Notice</p>
        <div style="padding-bottom: 5px;">
            <a href="admin_dash.php" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Back</a>
        </div>

<div class="jumbotron">
<!--form-->
<form action="../admin/edit_noticeAction.php" method="post">
           <div class="form-group">
                <label for="dept_id">Department:<sup>*</sup></label>
                <?php
                                //code for fetching the suppliers' information
                                require '../connection.php';
                                $sql1 = "SELECT * FROM `department`";


                                $query = $db->query($sql1);
                                echo "<select class='form-control' id='dept_id' name='dept_id' required/>";
                                echo"<option value=''>Choose One</option>";
                                while($row = $query->fetch_assoc()){
                                    echo"<option value='".$row['dept_id']."'>".$row['dept_name']."</option>";
                                }
                                echo"</select>";
                                $db->close();
                ?>
                </div>
                <?php
                //take data from database
                $notice_id = $_GET['notice_id'];
               
                //code for fetching the suppliers' information
                require '../connection.php';
                $sql1 = "SELECT * FROM `notice`";

                $query = $db->query($sql1);
                $row = $query->fetch_assoc();
                ?>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" id="date"  name="date" value="<?php echo $row['notice_date']; ?>" required/>
                    <input type="hidden"   name="notice_id" value="<?php echo $_GET['notice_id']; ?>" required/>
                </div>
                <div class="form-group">
                    <label for="title">title:<sup>*</sup></label>
                    <input type="text" class="form-control" id="title" placeholder="Notice Title" name="title" value="<?php echo $row['title']; ?>" required/>
                </div>
               
                <div class="form-group">
                    <label for="body">Body: <sup>*</sup></label>
                    <textarea name="body" class="form-control" placeholder="Body Part Can not be empty" required/>value="<?php echo $row['body']; ?>" </textarea>
                </div>
                
                            
                             
                                  
                <button type="submit" class="btn btn-success btn-block">Update</button><br>
                <a href="admin_dash.php" class="btn btn-danger  btn-block">Cancel</a>
            </form>
        
        <!--/form--> 
        </div>
</div>
<div class="col-md-3"></div>
</div>

<hr>
<?php require_once '../includes/footer.php';?>