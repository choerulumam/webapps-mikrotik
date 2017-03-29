<?php
include ("db_connect.php");
session_start();
if(session_destroy()) // Destroying All Sessions
{
    $query_temp_delete = mysqli_query($connection, "DELETE FROM temp_host");
    if ($query_temp_delete){
        header("Location: index.php"); // Redirecting To Home Page
        mysqli_close($connection);
    } else {
        echo "Error connection";
    }
}
?>