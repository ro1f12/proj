<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header('location:index.php');
}
/**
 * @author: ro1f12
 */
//Array ( [name] => obucjc [email] => alam@alam.com [pwd] => 123 [phone] => 12345678909876 [dept_id] => 2 [status_id] => 2 [salary] => 123 )
//print_r($_POST);
extract($_POST);



 //insert the data into the database
 require_once '../connection.php';
 //$sql1 = "INSERT INTO  `employee`(`password`,`name`,`email`,`phone`,`dept_id`,`status_id`,`salary`) 
 //           VALUES(".$pwd.",'".$name."','".$email."',".$phone.",".$dept_id.",".$status_id.",".$salary.")";

 $sql1 = " UPDATE `employee` SET `name` = '" .$name. "',`dept_id` = '" .$dept_id."', `dept_id` = '" .$dept_id. "' WHERE `employee`.`emp_id` = '" .$emp_id. "'";

$query = $db->query($sql1);

//var_dump($query);

 if($query == true){
    $_SESSION['success'] = true;
    //echo 'employee add successfully';
     header('location: employees.php');
 }
 else
 {
    $_SESSION['error'] = false;
    //echo 'something went wrong';
    header('location: employees.php');
 }
 $db->close();