
<?php require_once '../includes/header.php';
if(!isset($_SESSION['admin_id'])){
    header('location:index.php');
}
?>
<?php require_once '../includes/admin_nav.php';?>

<?php
//take required information from the database

                //take data from database
                $dept_id = $_GET['dept_id'];
               
                //code for fetching the suppliers' information
                require '../connection.php';
                $sql1 = "SELECT * FROM `department` WHERE `dept_id`= $dept_id";

                $query = $db->query($sql1);
                $row = $query->fetch_assoc();
                $cur_status = $row['status_id'];

?>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h2>Department</h2>
        <p class="text-muted">Edit Department</p>
        <div style="padding-bottom: 5px;">
            <a href="departments.php" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Back</a>
        </div>

<div class="jumbotron">
<!--form-->
<form action="../admin/edit_deptAction.php" method="post">

            <div class="form-group">
                    <label for="dept_name">Department Name:</label>
                    <input type="text" class="form-control" id="dept_name"  name="dept_name" value="<?php echo $row['dept_name']; ?>" required/>
                    <input type="hidden"   name="notice_id" value="<?php echo $_GET['dept_id']; ?>" required/>
                </div>

             <div class="form-group">
                    <label for="dept_detail">Detail:<sup>*</sup></label>
                    <input type="text" class="form-control" id="dept_detail" placeholder="Department Details" name="dept_detail" value="<?php echo $row['dept_detail']; ?>" required/>
                </div>    
           <div class="form-group">
                <label for="status_id">Status:<sup>*</sup></label>
                <?php
                                //code for fetching the suppliers' information
                                require '../connection.php';
                                $sql1 = "SELECT * FROM `status`";


                                $query = $db->query($sql1);
                                echo "<select class='form-control' id='status_id' name='status_id' required/>";
                                echo"<option value='".$cur_status."'>Change</option>";
                                while($row = $query->fetch_assoc()){
                                    echo"<option value='".$row['status_id']."'>".$row['status']."</option>";
                                }
                                echo"</select>";
                                $db->close();
                ?>
                </div>
                
                
               
               
                
                
                            
                             
                                  
                <button type="submit" class="btn btn-success btn-block">Update</button><br>
                <a href="departments.php" class="btn btn-danger  btn-block">Cancel</a>
            </form>
        
        <!--/form--> 
        </div>
</div>
<div class="col-md-3"></div>
</div>

<hr>
<?php require_once '../includes/footer.php';?>