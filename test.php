<?php 

session_start();
include_once 'validateFileType.php';

 var_dump($_FILES);
 $allowed = array('jpg', 'png', 'jpeg');
 $filename = $_FILES['img']['name'];

 $_SESSION['msg'] = validateFileType($filename,$allowed);
 $print_r($_SESSION);
 unset($_SESSION['msg']);
    

?>

<form action="test.php" method="post" enctype="multipart/form-data">
<input type="file" name="img" id="img">
<input type="submit" value="validate" name="submit">
</form>



