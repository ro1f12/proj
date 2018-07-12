<?php session_start();?>
<?php
if(!isset($_SESSION['emp_id'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!--link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css"-->
    <!--icon-->
    
    <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>EMS | Employee Management System</title>
    <style>
        #grad{
            height: 100%;
            background: #e6fff2; /* For browsers that do not support gradients */
            background: linear-gradient(#e6fff2, #e6fff4); /* Standard syntax (must be last) */
        }
    </style>
</head>
<body id="grad">
<div class="container-fluid" id="">
<!--navbar-->
<nav class="navbar navbar-static-top navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/proj/user_dash.php">Employee Management System</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://localhost/proj/user_dash.php">Dashboard</a></li>
                <li><a href="http://localhost/proj/admin/view_profile.php">Profile</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        
                        <li class="divider"></li>
                        <!--li><a href="#">Change Password</a></li-->
                        <li><a href="#">Change Password</button></li>
                        <li class="divider"></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>

            
        </div>
    </div>
</nav>
<marquee direction="" width="100%" scrolldelay="300" behavior="sliding" class="text-center"><strong>User Dashboard</strong></marquee>
<!--/navbar-->

<!--user profile view-->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h2>Profile</h2>
        <p class="text-muted"> Employee Profile </p>
        <div style="padding-bottom: 5px;">
            <a href="user_dash.php" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Back</a>
        </div>
        <div class="jumbotron">
          <?php
            $emp_id = $_SESSION['emp_id'];
            //retrieve information from the DB to fill the table data
            require_once 'connection.php';
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
                <img src="images/<?php echo $row['photo'];?>" class="img img-responsive">
                <button type="button" class="btn btn-primary btn-md btn-block" data-toggle="modal" data-target="#myModal">Upload</button>
                <?php include_once 'includes/uploadPhotoModal.php'; ?>
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
                echo "<h3>hello ".$row['name']."</h2> ";
                echo "Email: ".$row['email']."<br>";  
               //echo $row['dept_id']."<br>";
               echo "Department: ". $row['dept_name']."<br>"; 
               
                //echo "salary: ".$row['status']."<br>";
                echo "Contact No: ".$row['phone']."<br>";
                echo "salary: ".$row['salary']."<br>";
                echo "joined on: ". $row['joined_on']."<br>";
                
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


<!--/user profile view-->



<!--footer-->
<div class="container-fluid">
    <div class="navbar nav navbar-fixed-bottom navbar-inverse" style="padding-bottom: 0px; max-height: fit-content;">
        <div class="container">
        <p class="text-center text-muted" style="">
            Employee Management System | Powered By Bootstrap<br/>
            &copy; | 2018-19<br/>
            Version 1.0.1
        </p>
        </div>
    </div>
    </div>

</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
<!--/footer-->
