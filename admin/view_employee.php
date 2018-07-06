<?php require_once '../includes/header.php';?>
<?php require_once '../includes/admin_nav.php';?>


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h2>Employees</h2>
        <p class="text-muted">Individual Employee Data </p>
        <div style="padding-bottom: 5px;">
            <a href="employees.php" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Back</a>
        </div>
        <div class="jumbotron">
          <?php
            $emp_id = $_GET['emp_id'];
            //retrieve information from the DB to fill the table data
            require_once '../connection.php';
           //$sql = "SELECT * FROM `employee` NATURAL JOIN `status` WHERE `emp_id` = '".$emp_id."'";

           $sql = "SELECT * FROM `employee` NATURAL JOIN `status` NATURAL JOIN `department` WHERE `emp_id` = '".$emp_id."'";
            //print_r($sql);
            $result = $db->query($sql);
            //print_r($result);
            $row = $result->fetch_assoc();
            //print_r($row);
         
            ?>
            <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <img src="../images/<?php echo $row['photo'];?>" class="img img-responsive">
                <button type="button" class="btn btn-primary btn-md btn-block" data-toggle="modal" data-target="#myModal">Upload</button>
                <?php include_once '../includes/uploadPhotoModal.php'; ?>
            </div>
            <div class="col-md-4"></div>
            </div>
            <br>

            <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                <div class="panel-hedaer text-center"><strong>Informations Available<strong><hr/></div>
               <div class="panel-body text-center">
               <?php 
                echo $row['name']."<br>";
                echo $row['email']."<br>";  
               //echo $row['dept_id']."<br>";
               echo $row['dept_name']."<br>"; 
               
                echo $row['status']."<br>";
                echo $row['phone']."<br>";
                echo $row['salary']."<br>";
                echo $row['joined_on']."<br>";
                
                ?>
                </div>
                <div class="panel-footer"><a href="#" class="btn btn-default btn-block">Want to update? Contact Admin</a></div>
               </div>
            </div>   
            <div class="col-md-3"></div>
            </div>
        </div>

    </div>
</div>
</div>
<div class="col-md-2"></div>
</div>



<?php require_once '../includes/footer.php';?>