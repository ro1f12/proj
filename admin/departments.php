<?php require_once '../includes/header.php';
if(!isset($_SESSION['admin_id'])){
  header('location:index.php');
}
?>
<?php require_once '../includes/admin_nav.php';?>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<h2>Departments</h2>
  <p class="text-muted">Admin can control different actions regarding departments from this page </p>
    <div style="padding-bottom: 5px;">
        <a href="add_dept.php" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add</a>
    </div>
  <table class="table table-responsive table-hover table-bordered table-condensed">
    <thead>
      <tr class="active">
        <th>SL. No.</th>
        <th>Department ID</th>
        <th>Department Name</th>
        <th>Details</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php
    //retrieve information from the DB to fill the table data
    require_once '../connection.php';
    $sql = "SELECT * FROM `department` NATURAL JOIN `status`";

    $result = $db->query($sql);
    $i = 1;
    while($row = $result->fetch_assoc()){
        echo "<tr>
                    <td>" . $i . "</td>
					<td>" . $row['dept_id'] . "</td>
					<td>" . $row['dept_name'] . "</td>
					<td><p>" . $row['dept_detail'] . "</p></td>
					<td class='btn btn-default btn-sm'>" . $row['status'] . "</td>
					<td><a href='edit_dept.php?dept_id=".$row['dept_id']."'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a></td>
					<tr>";
        $i++;
    }

    ?>

    </tbody>
  </table>
</div>
</div>
</div>
<div class="col-md-2"></div>
</div>



<?php require_once '../includes/footer.php';?>
