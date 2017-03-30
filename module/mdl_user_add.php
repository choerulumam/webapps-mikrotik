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
    $counter = mysqli_query($connection, "SELECT MAX(user_id) as max FROM temp_user");
    $row = mysqli_fetch_array($counter);
    $counter_get = $row['max']+1;
    echo "$counter_get";
    $check_input = mysqli_query($connection, "INSERT INTO temp_user VALUES ($counter_get, '$u_name', '$u_pass', '$u_group')");
    if(!$check_input){
        echo "Error input data";
    }
    mysqli_close($connection);
}
else {
    echo " Failed to input new user";
}
include ('../footer.php');
?>