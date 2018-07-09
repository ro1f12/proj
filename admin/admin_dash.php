<?php
require_once '../includes/header.php';
?>
<?php require_once '../includes/admin_nav.php';?>

<?php 
/**
 * message flushing technique
 */
if(isset($_SESSION['success'])){
    echo '<script> alert("Task Completed Successfully");</script>';
    unset($_SESSION['success']);
}
if(isset($_SESSION['error'])){
    echo '<script> alert("Something Went Wrong");</script>';
    unset($_SESSION['error']);
}

?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h2>Notice</h2>
        <p class="text-muted">Admin can control different actions regarding Notices from this page </p>
        <div style="padding-bottom: 5px;">
            <!--a href="add_dept.php" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add</a-->
            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
            <?php include_once '../includes/noticeAddModal.php'; ?>
        </div>
        <div class="jumbotron">
        <!-- _-->
        <?php
         require '../connection.php';
        $sql="SELECT * FROM `notice` ORDER BY  `notice_id` DESC LIMIT 10";
        $result=$db->query($sql);
        // var_dump($sql);
        //var_dump($result);
        if($db->query($sql))
        {
            if($result->num_rows>0)
            {                  
              echo"<div class='row'>";
                $col=$result->num_rows;
                for($i=0;$i<$result->num_rows;$i++)
                {   
                 $row=$result->fetch_assoc();
                 echo "<div class='col-md-offset-1 col-md-10 col-xs-12 '>";
                    echo "<h3 class='text-center text-primary'>".$row['title']."</h3>";
                    echo "<hr>";
                    echo "<i class='text-muted'>Date:".$row['notice_date']."</i><br/>";
                    echo "<p class='text-muted'>".$row['body']."</p>";
                    echo "<a href='#' class='btn btn-default btn-block'>More...<a/>";

                 echo "</div>";
              }
            echo"</div class='row'>";
            }
            else
            {
               echo"<div><p class='text-center text-info'>Currently No Notice  Avaiable In The System!!</p><div>";
            }
        }
        $db->close();
    ?>

        <!-- / -->
        </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>


<?php require_once '../includes/footer.php';?>
