<?php
session_start();
/**
 * @author: ro1f12
 */

extract($_POST);



 //insert the data into the database
 require_once '../connection.php';
 $sql1 = "INSERT INTO  `notice`(`dept_id`,`title`,`notice_date`,`body`) 
            VALUES(".$dept_id.",'".$title."','".$date."','".$body."')";

//var_dump($sql1);

$query = $db->query($sql1);

//var_dump($query);

 if($query == true){
    $_SESSION['success'] = true;
   // echo 'notice added successfully';
     header('location: admin_dash.php');
 }
 else
 {
    $_SESSION['error'] = false;
    //echo 'something went wrong';
    header('location: admin_dash.php');
 }
 $db->close();