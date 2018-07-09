<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center text-info">Add Notice</h4>
        </div>
        <div class="modal-body">
        <!--form-->
           <form action="../admin/noticeAddAction.php" method="post">
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
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" id="date"  name="date" required/>
                </div>
                <div class="form-group">
                    <label for="title">title:<sup>*</sup></label>
                    <input type="text" class="form-control" id="title" placeholder="Notice Title" name="title" required/>
                </div>
               
                <div class="form-group">
                    <label for="body">Body: <sup>*</sup></label>
                    <textarea name="body" class="form-control" placeholder="Body Part Can not be empty" required/> </textarea>
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