<?php
include ('../session.php');
include ('../header.php');
include ("api_connect_1.php");

$u_name   = $_POST['username'];

$query_delete = mysqli_query($connection,"SELECT user_id FROM temp_user WHERE username=$u_name");
$API->write("/user/remove", false);   
$API->write("=.id=$query_delete");

if ($API->read()) {
    //mysqli_query($connection, "Delete FROM temp_user WHERE username=$u_name");
    echo "Data has been deleted Succesfully";
   }
else {
    echo " Failed to delete user";
}
include ('../footer.php');
?>