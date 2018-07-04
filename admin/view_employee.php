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
          <?php
            $emp_id = $_GET['emp_id'];
            //retrieve information from the DB to fill the table data
            require_once '../connection.php';
            $sql = "SELECT * FROM `employee` NATURAL JOIN `status` WHERE `emp_id` = '".$emp_id."'";

            $result = $db->query($sql);
            $i = 1;
            while($row = $result->fetch_assoc()){
                echo "<tr>
                    <td>" . $i . "</td>
					<td>" . $row['emp_id'] . "</td>
					<td>" . $row['name'] . "</td>
					<td>" . $row['email'] . "</td>
					<td><p>" . $row['phone'] . "</p></td>
					<td class='text-center' >" . $row['status'] . "</td>
					<td>
					   <a href='view_employee.php?emp_id=".$row['emp_id']."'><span class='glyphicon glyphicon-user btn btn-sm btn-default' aria-hidden='true'></span></a>
					   &nbsp;&nbsp;<a href='edit_employee.php?emp_id=".$row['emp_id']."'><span class=' btn btn-sm btn-default glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
					</td>
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