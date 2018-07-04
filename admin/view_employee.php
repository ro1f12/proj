<?php require_once '../includes/header.php';?>
<?php require_once '../includes/admin_nav.php';?>


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h2>Employees</h2>
        <p class="text-muted">Employee Detail </p>
        <div style="padding-bottom: 5px;">
            <a href="employees.php" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Back</a>
        </div>
        <div class="jumbotron">
          <?php
            $emp_id = $_GET['emp_id'];
            //retrieve information from the DB to fill the table data
            require_once '../connection.php';
            $sql = "SELECT * FROM `employee` NATURAL JOIN `status` WHERE `emp_id` = '".$emp_id."'";

            $result = $db->query($sql);

            ?>
        </div>

    </div>
</div>
</div>
<div class="col-md-2"></div>
</div>



<?php require_once '../includes/footer.php';?>