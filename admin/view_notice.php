<?php require_once '../includes/header.php';?>
<?php require_once '../includes/admin_nav.php';?>


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h2>Notice</h2>
        <p class="text-muted">Notice Details </p>
        <div style="padding-bottom: 5px;">
            <a href="admin_dash.php" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Back</a>
        </div>
        <div class="jumbotron">
          <?php
            $notice_id = $_GET['notice_id'];
            //retrieve information from the DB to fill the table data
            require_once '../connection.php';
           //$sql = "SELECT * FROM `employee` NATURAL JOIN `status` WHERE `emp_id` = '".$emp_id."'";

           $sql = "SELECT * FROM `notice` NATURAL JOIN `department` WHERE `notice_id` = '".$notice_id."'";
            //print_r($sql);
            $result = $db->query($sql);
            //print_r($result);
            $row = $result->fetch_assoc();
            //print_r($row);
         
            ?>
           
            <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                <div class="panel-hedaer text-center"><strong>Notice Detail<strong></div>
               <div class="panel-body text-center">
               <?php 
                echo "<div class='col-md-offset-1 col-md-10 col-xs-12 '>";
                echo "<h3 class='text-center text-primary '>".ucfirst($row['title'])."</h3>";
                echo "<hr>";
                echo "<i class='text-muted'>Date:".$row['notice_date']."</i><br/>";
                echo "<p class='text-muted'>".$row['body']."</p>";
                echo "<a href='edit_notice.php?notice_id=".$row['notice_id']."' class='btn btn-primary btn-block'>Edit<a/><br/>";
                echo "<a href='delete_notice.php?notice_id=".$row['notice_id']."' class='btn btn-danger btn-block'>Delete<a/>";
                
                echo "</div>";
                ?>
                </div>
                
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