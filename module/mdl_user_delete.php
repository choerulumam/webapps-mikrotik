<?php
include ('../session.php');
include ('../header.php');
include ("api_connect_1.php");

$u_name   = $_POST['username'];
$query_delete = mysqli_query($connection,"SELECT user_id as id FROM temp_user WHERE username='$u_name'");
$row = mysqli_fetch_array($query_delete);
$row_delete = $row['id'];
$API->write("/user/remove", false);   
$API->write("=.id=$row_delete");

if ($API->read()) {
    mysqli_query($connection, "Delete FROM temp_user WHERE username='$u_name'");
    echo "Data has been deleted Succesfully";
   }
else {
    echo " Failed to delete user";
}
include ('../footer.php');
?>