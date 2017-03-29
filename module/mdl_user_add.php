<?php
include ('../session.php');
include ('../db_connect.php');
include ('../header.php');
include ("api_connect_1.php");

$u_name   = $_POST['username'];
$u_pass   = $_POST['password'];
$u_group  = $_POST['group'];
//$u_status = $_POST['status'];

$API->write("/user/add", false);   
$API->write("=name=$u_name", false);
$API->write("=group=$u_group", false);
$API->write("=password=$u_pass");
//$API->write("=disabled=$u_status");

if ($API->read()) {
    mysqli_query($connection, "INSERT INTO temp_user(username,password,u_group) VALUES ('$u_name', '$u_pass', '$u_group')");
    echo "Data has been added Succesfully";
    mysqli_close($connection);
   }
else {
    echo " Failed to input new user";
}
include ('../footer.php');
?>