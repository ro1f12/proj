<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center text-info">Add Employee</h4>
        </div>
        <div class="modal-body">
        <!--form-->
           <form action="../admin/employeeAddAction.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Employee Name" name="name" required/>
                </div>
               <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required/>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required/>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="phone" class="form-control" id="phone" placeholder="Enter Contact Number" name="phone" required/>
                </div>
                <div class="form-group">
                <label for="dept_id">Department:</label>
                <?php
                                //code for fetching the suppliers' information
                                require '../connection.php';
                                $sql1 = "SELECT * FROM `department`";


                                $query = $db->query($sql1);
                                echo "<select class='form-control' id='dept_id' name='dept_id'>";
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
                                echo "<select class='form-control' id='status_id' name='status_id'>";
                                while($row = $query->fetch_assoc()){
                                    echo"<option value='".$row['status_id']."'>".$row['status']."</option>";
                                }
                                echo"</select>";
                                $db->close();
                ?>
                </div>
                <div class="form-group">
                    <label for="Salary">Salary:</label>
                    <input type="text" class="form-control" id="salary" placeholder="Enter Salary" name="salary" required/>
                </div>
                
                                  
                <button type="submit" class="btn btn-success">Add</button>
                <button type="button" class="btn  btn-danger" data-dismiss="modal">Cancel</button>
            </form>
        
        <!--/form-->          
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default btn-xm" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>