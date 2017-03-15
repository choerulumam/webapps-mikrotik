<?php
//require('/module/routeros_api.class.php');
use PEAR2\Net\RouterOS;
require_once '/module/PEAR2_Net_RouterOS-1.0.0b5.phar';
session_start(); // Starting Session
$error=''; // Variable To Store Error Message for username and password
$error_mrtk=''; // Variable To Store Error Message for mikrotik user
if (isset($_POST['submit'])) 
{
	if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['hostname'])) 
	{
		$error = "Username or Password is invalid";
	}
	else
	{
	// Define $username and $password
	$hostname=$_POST['hostname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("localhost", "root", "");
	// Selecting Database
	$db = mysql_select_db("temp_api", $connection);
	// SQL query to fetch information of registerd users and finds user match.
	$query_temp_login	= mysql_query("select * from temp_user where password='$password' AND username='$username'", $connection);
	$rows_login_session	= mysql_num_rows($query_temp_login);
	$rows_login_userid	= mysql_fetch_row($query_temp_login);
	$result_userid = $rows_login_userid[0];

	//$API = new RouterosAPI();
    $util = new RouterOS\Util(
        $client = new RouterOS\Client($hostname, $username, $password)
    );
        
	if (($rows_login_session == 1) AND ($client)) {
		$query_temp_insert = mysql_query("insert into temp_host(host_ip,user_id) values('$hostname','$result_userid')", $connection);
		if($query_temp_insert){ 
			$_SESSION['login_user']=$username; // Initializing Session/
			header("location: /ui.php"); // Redirecting To Other Page
		}
	} 
	else 
	{
		if($rows_login_session != 1){
			$error = "Username or Password is invalid";
		}
		else{
			$error_mrtk = "Server Fail";
		}
	}
	mysql_close($connection); // Closing Connection
	}
}
?>