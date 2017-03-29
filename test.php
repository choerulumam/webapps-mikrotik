<?php
require('module/routeros_api.class.php');
$API = new RouterosAPI();
if (!$API->connect('192.168.2.1', 'admin', 'd3tkens'))
 {
  die("server error ");
 }
$API->write("/user/remove", false);   
$API->write("=.id=2");
if ($API->read()) {
   // mysqli_query($connection, "Delete FROM temp_user WHERE username=$u_name");
    echo "Data has been added Succesfully";
   }
?>