<?php
error_reporting(0);     
session_start();
include ("connect.php");
$email = $_GET['email'];
$status  ='0';




$query1= "update  tblstudent set status='$status'  where email='$email';";
    mysqli_query($con,$query1);
    echo '<script type="text/javascript">'; 
    echo 'alert("The student account has not been approved");'; 
    $URL="ListNew_Student.php";
    echo "location.href='$URL'";
    echo '</script>';


?>
