<?php
include ('../session.php');
include ('../header.php');
include ("api_connect_1.php");

$u_name   = $_POST['username'];

$API->write("/user/remove", false);   
$API->write("=name=$u_name");

if ($API->read()) {
   // mysqli_query($connection, "Delete FROM temp_user WHERE username=$u_name");
    echo "Data has been added Succesfully";
   }
else {
    echo " Failed to delete user";
}
include ('../footer.php');
?>