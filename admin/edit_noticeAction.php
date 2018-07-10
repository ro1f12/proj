<?php
session_start();
/**
 * @author: ro1f12
 */

extract($_POST);




 require_once '../connection.php';
  

 $sql1 = " UPDATE `notice` SET `title` = '" .$title. "',`dept_id` = '" .$dept_id."', `notice_date` = '" .$date. "',`body`='".$body."' WHERE `notice`.`notice_id` = " .$notice_id;
// var_dump($sql1);
$query = $db->query($sql1);

//var_dump($query);

 if($query == true){
    $_SESSION['success'] = true;
    //echo 'updated';
    header('location: admin_dash.php');
 }
 else
 {
    $_SESSION['error'] = false;
    //echo 'something went wrong';
    header('location: admin_dash.php');
 }
 $db->close();