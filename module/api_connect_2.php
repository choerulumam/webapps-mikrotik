<?php
use PEAR2\Net\RouterOS;
require_once '../module/PEAR2_Net_RouterOS-1.0.0b5.phar';

$db = mysql_select_db("temp_api", $connection);
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_get_db_uinfo = mysql_query("select username, password, temp_host.host_ip from temp_user inner join temp_host on host_ip where username='$user_check'", $connection);

$ses_get_row_uinfo = mysql_fetch_assoc($ses_get_db_uinfo);

$user = $ses_get_row_uinfo['username'];
$pass = $ses_get_row_uinfo['password'];
$host = $ses_get_row_uinfo['host_ip'];

try {
    $client = new RouterOS\Client($host, $user, $pass);
    $util   = new RouterOS\Util($client);
} catch (Exception $e) {
    die($e);
    echo 'Server error';
}
?>