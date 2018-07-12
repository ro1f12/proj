<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center text-info">Add Department</h4>
        </div>
        <div class="modal-body">
        <!--form-->
           <form action="../admin/departmentAddAction.php" method="post">
                <div class="form-group">
                    <label for="dept_name">Department Name:</label>
                    <input type="text" class="form-control" id="dept_name" placeholder="Department name" name="dept_name" required/>
                </div>
                <div class="form-group">
                    <label for="dept_detail">Detail:</label>
                    <input type="text" class="form-control" id="dept_detail" placeholder="Details" name="dept_detail" required/>
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