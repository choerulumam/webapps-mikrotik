<?php
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("temp_api", $connection);
if (!$db) {
    die('Could not connect: ' . mysql_error());
}
?>