<?php
session_start();
//only POST request is accepted
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize POST array
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //print_r($_POST);
    $admin_id = $_SESSION['admin_id'];
    //connect to db
    require_once '../connection.php';
    $sql = "SELECT * FROM `admin` WHERE `email` = '" . $admin_id ."'";
    $query = $db->query($sql);
    //var_dump($query);
    //var_dump($sql);
    if($query == true) {
        $row = $query->fetch_assoc();
        //close first conn
        //$conn->close();

        if($_POST['pass'] == $row['password'])
        {
            //check for confirm pass and new pass
            if($_POST['new_pass'] == $_POST['con_pass'])
            {
                //set new password
                $new_pass = $_POST['new_pass'];
                //now change password
                $sql = " UPDATE `admin` SET `password` = '" . $new_pass . "' WHERE `admin`.`email` = '" . $_SESSION['admin_id'] . "'";
                $query = $db->query($sql);
                //var_dump($query);
                //var_dump($sql);

                if ($query == true) {
                    $_SESSION['success'] = 'password changed successfully';
                    //redirect to item home
                    //echo $_SESSION['success'];
                    header('location: ../admin/admin_dash.php');
                }
                else
                {

                    $_SESSION['error'] = 'Something went wrong while changing password';
                    echo $_SESSION['error'];
                    
                }
            }
            else
            {
                $_SESSION['error'] = 'password didnot matched !!!';
                echo $_SESSION['error'];
                //header('location: ../change_pass.php');

            }

        }

        else
        {
            $_SESSION['error'] = 'provide correct password';
            echo $_SESSION['error'];
            //header('location: ../change_pass.php');
        }


    }
}
else
{
    $_SESSION['error'] = 'Something went wrong while changing password !!! try again later';
    echo $_SESSION['error'];
   // header('location: ../change_pass.php');
}