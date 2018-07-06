<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center text-info">Upload Photo</h4>
        </div>
        <div class="modal-body">
        <!--form-->
           <form action="../admin/uploadPhotoAction.php" method="post" enctype="multipart/form-data" class="form-inline">
           <div class="form-group">
                <!--label for="photo">choose photo</label-->
                <input type="file" class="form-control" id="photo" required/>
            </div>
                              
                <button type="submit" class="btn btn-success" disabled>Upload</button>
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