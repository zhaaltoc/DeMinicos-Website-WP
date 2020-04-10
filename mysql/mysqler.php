<?php
$mysql_serv="127.0.0.1";
$mysql_user="root";
$mysql_pass="13Rootpass13!";
$mysql_db="deminicos";
$mysql_port="3307";

// Create connection
$conn = mysqli_connect($mysql_serv, $mysql_user, $mysql_pass, $mysql_db, $mysql_port);

// phpinfo();

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
//  mysql_select_db($mysql_db,$conn);
?>
