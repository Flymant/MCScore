<?php 
include_once "config.php";
error_reporting(E_ALL ^ E_DEPRECATED);

# Open Database Connection
$g_connection = mysql_connect('localhost', 'root', '1234');
if (!$g_connection) {
    die('Could not connect database' . mysql_error());
}
mysql_select_db($g_sis_config["database"], $g_connection);
?>
