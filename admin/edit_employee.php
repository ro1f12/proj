<?php require_once '../includes/header.php';?>
<?php require_once '../includes/admin_nav.php';?>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h2>Employees</h2>
        <p class="text-muted">Edit Employee Data </p>
        <div style="padding-bottom: 5px;">
            <a href="employees.php" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Back</a>
        </div>

<div class="jumbotron">
<form action="../admin/edit_employeeAction.php" method="post">

                <?php
                                $emp_id = $_GET['emp_id'];
                                //code for fetching the employee information
                                require '../connection.php';
                                $sql = "SELECT * FROM `employee` WHERE `emp_id`= '".$emp_id."'";


                                $query = $db->query($sql);
                                $row1 = $query->fetch_assoc();
                                
                                $db->close();
                ?>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Employee Name" value="<?php echo $row1['name'];?>" name="name" required/>
                    <input type="hidden"  value="<?php echo $emp_id;?>" name="emp_id">
                </div>
               <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row1['email'];?>" required/>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php echo $row1['password'];?>"required/>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="phone" class="form-control" id="phone" placeholder="Enter Contact Number" name="phone" value="<?php echo $row1['phone'];?>" required/>
                </div>
                <div class="form-group">
                <label for="dept_id">Department:</label>
                <?php
                                //code for fetching the employee information
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
                <div class="form-group">
                <label for="status_id">Status:</label>
                <?php
                                //code for fetching the status information
                                require '../connection.php';
                                $sql1 = "SELECT * FROM `status`";


                                $query = $db->query($sql1);
                                echo "<select class='form-control' id='status_id' name='status_id' required/>";
                                echo"<option value=''>Choose One</option>";
                                while($row = $query->fetch_assoc()){
                                    echo"<option value='".$row['status_id']."'>".$row['status']."</option>";
                                }
                                echo"</select>";
                                $db->close();
                ?>
                </div>
                <div class="form-group">
                    <label for="Salary">Salary:</label>
                    <input type="text" class="form-control" id="salary" placeholder="Enter Salary" name="salary" value="<?php echo $row1['salary'];?>" required/>
                </div>
                
                                 
                <button type="submit" class="btn btn-success btn-block">Update</button><br>
                <a href="employees.php" class="btn btn-danger  btn-block">Cancel</a>
                
                
                </div>
                
            </form>
            </div>
</div>
<div class="col-md-3"></div>
</div>

<hr>
<?php require_once '../includes/footer.php';?>