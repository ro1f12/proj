<?php
session_start();
require_once '../connection.php';

//Values from the POST array
$password = $_POST['password'];
$email = $_POST['email'];


//sql query
$sql = "SELECT * FROM `admin` WHERE `email`='".$email."'";
$result = $db->query($sql);

if($result == true )
{
    $row = $result->fetch_assoc();
    if($row['password'] == $password)
    {
        $_SESSION['admin_id'] = $email;
        header('location: admin_dash.php');
        //echo 'welcome user';
    }
    else
    {
        //die('wrong credentials');
        header('location: index.php');
    }
}
$db->close();
