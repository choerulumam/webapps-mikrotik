<?php
include ("db_connect.php");
session_start();
if(session_destroy()) // Destroying All Sessions
{
    $query_temp_delete = mysql_query("DELETE FROM temp_host", $connection);
    if ($query_temp_delete){
        header("Location: index.php"); // Redirecting To Home Page
        mysql_close($connection);
    } else {
        echo "Error connection";
    }
}
?>