<?php
session_start();
/**
 * @author: ro1f12
 */

extract($_POST);




 require_once '../connection.php';
  

 $sql1 = " UPDATE `department` SET `dept_name` = '" .$dept_name. "',`dept_detail` = '" .$dept_detail."', `status_id` = '" .$status_id. "'WHERE `department`.`dept_id` = " .$notice_id;
// var_dump($sql1);
$query = $db->query($sql1);

//var_dump($query);

 if($query == true){
    $_SESSION['success'] = true;
    //echo 'updated';
    header('location: departments.php');
 }
 else
 {
    $_SESSION['error'] = true;
    //echo 'something went wrong';
    header('location: departments.php');
 }
 $db->close();