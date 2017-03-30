<?php
//include ("module/api_connect_1.php");
include ("db_connect.php");
$connection = mysqli_connect("127.0.0.1", "root", "biska", "temp_api");
if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
else {
    $u_name = "choerul";
    $query_delete = mysqli_query($connection,"SELECT user_id as id FROM temp_user WHERE username='$u_name'");
    $row = mysqli_fetch_array($query_delete);
    $counter_get = $row['id'];
    if($query_delete){
        echo "$counter_get";
    }
    //$API->write("/user/remove", false);   
    //$API->write("=.id=$query_delete");
    //if ($API->read()) {
        //mysqli_query($connection, "Delete FROM temp_user WHERE username=$u_name");
      //  echo "Data has been deleted Succesfully";
    //   }
    //else {
      //  echo " Failed to delete user";
    //}
}
?>