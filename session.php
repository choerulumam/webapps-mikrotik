<?php
include ("db_connect.php");
session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_get_db_uinfo = mysqli_query($connection, "select username, password, temp_host.host_ip from temp_user inner join temp_host on host_ip where username='$user_check'");

$ses_get_row_uinfo = mysqli_fetch_assoc($ses_get_db_uinfo);

$user = $ses_get_row_uinfo['username'];
$pass = $ses_get_row_uinfo['password'];
$host = $ses_get_row_uinfo['host_ip'];

$login_session =$user;

if(!isset($login_session))
{
	mysqli_close($connection); // Closing Connection
	header('Location: index.php'); // Redirecting To Home Page
}
?>