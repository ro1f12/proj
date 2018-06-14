<?php
session_start();
require_once 'connection.php';

//Values from the POST array
$password = $_POST['password'];
$user_id = $_POST['user_id'];


//sql query
$sql = "SELECT * FROM `employee` WHERE `user_id`='".$user_id."'";
$result = $db->query($sql);

if($result == true )
{
    $row = $row = $result->fetch_assoc();
    if($row['password'] == $password)
    {
        $_SESSION['user_id'] = $user_id;
        header('location: user_dash.php');
        //echo 'welcome user';
    }
    else
    {
        //die('wrong credentials');
        header('location: index.php');
    }
}
$db->close();
