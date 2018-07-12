<?php
session_start();
/**
 * @author: ro1f12
 */

extract($_POST);



 //insert the data into the database
 require_once '../connection.php';
 $sql1 = "INSERT INTO  `department`(`dept_name`,`dept_detail`) 
            VALUES('".$dept_name."','".$dept_detail."')";

//var_dump($sql1);

$query = $db->query($sql1);

//var_dump($query);

 if($query == true){
    $_SESSION['success'] = true;
   // echo 'notice added successfully';
     header('location: departments.php');
 }
 else
 {
    $_SESSION['error'] = false;
    //echo 'something went wrong';
    header('location: departments.php');
 }
 $db->close();