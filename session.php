<?php
$connection = mysql_connect("localhost", "root", "");

// Selecting Database
$db = mysql_select_db("temp_api", $connection);
session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_get_db_uinfo = mysql_query("select username, password, temp_host.host_ip from temp_user inner join temp_host on host_ip where username='$user_check'", $connection);

$ses_get_row_uinfo = mysql_fetch_assoc($ses_get_db_uinfo);

$user = $ses_get_row_uinfo['username'];
$pass = $ses_get_row_uinfo['password'];
$host = $ses_get_row_uinfo['host_ip'];

$login_session =$user;

if(!isset($login_session))
{
	mysql_close($connection); // Closing Connection
	header('Location: /index.php'); // Redirecting To Home Page
}
?>

