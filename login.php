<?php
include ('db_connect.php');
use PEAR2\Net\RouterOS;
require_once 'module/PEAR2_Net_RouterOS-1.0.0b5.phar';
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
	// SQL query to fetch information of registerd users and finds user match.
	$query_temp_login	= mysqli_query($connection, "select * from temp_user where password='$password' AND username='$username'");
	$rows_login_session	= mysqli_num_rows($query_temp_login);
	$rows_login_userid	= mysqli_fetch_row($query_temp_login);
	$result_userid = $rows_login_userid[0];
        
    try {
    $client = new RouterOS\Client($hostname, $username, $password);
        if ($client){
            $util = new RouterOS\Util(
                $client = new RouterOS\Client($hostname, $username, $password)
            );
        }
    } catch (Exception $error_mrtk) {
        $error_mrtk = "server fail";
        header("location: index.php");
    }
        
	if (($rows_login_session) == 1 AND ($client)) {
		$query_temp_insert = mysqli_query($connection, "insert into temp_host(host_ip,user_id) values('$hostname','$result_userid')");
		if($query_temp_insert){ 
			$_SESSION['login_user']=$username; // Initializing Session/
			header("location: ui.php"); // Redirecting To Other Page
		}
	} 
	else 
	{
		if($rows_login_session != 1){
			$error = "Username or Password is invalid";
            header("location: index.php");
		}
	}
	mysqli_close($connection); // Closing Connection
	}
}
?>