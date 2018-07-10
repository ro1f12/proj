<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header('location:index.php');
}
/**
 * @author: ro1f12
 */
$notice_id = $_GET['notice_id'];
require_once '../connection.php';
$sql1 = "DELETE FROM `notice` WHERE `notice`.`notice_id` = ".$notice_id;
$query = $db->query($sql1);
//var_dump($query);

 if($query == true){
    $_SESSION['success'] = true;
   // echo 'notice deleted successfully';
    header('location:admin_dash.php');
 }
 else
 {
     $_SESSION['error'] = false;
    //echo 'something went wrong';
    header('location:admin_dash.php');
 }
 $db->close();