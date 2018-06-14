<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="proj";

// Create connection
$db = new mysqli($servername, $username, $password,$database);
//var_dump($db);

// Check connection
if (!$db) {
    die("Connection failed: ".$db->connect_error);
}
/*else{
 *  echo"connected";
 *}
 */
?>