<?php
// Connect to database
$db_host = "localhost";
$db_name = "stephwar_thrift";
$db_user = "stephwar_sh";
$db_pass = "haha1d'wap";

// Create mysqli object
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

// Error handler
if(mysqli_connect_errno()) {
	echo "This connection failed".mysqli_connect_error();
	die();
}
?>