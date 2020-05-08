<?php
if ($_SERVER['REMOTE_ADDR'] == '172.31.0.1') {
  $mysql_serv="mysql";
  $mysql_port="3306";
}
else {
  $mysql_serv="127.0.0.1";
  $mysql_port="3307";
}
$mysql_user="root";
$mysql_pass="13Rootpass13!";
$mysql_db="deminicos_test";

// Create connection
$conn = mysqli_connect($mysql_serv, $mysql_user, $mysql_pass, $mysql_db, $mysql_port);
if (!$conn)
  die("Connection failed: " . mysqli_connect_error());
// else
  // $_GLOBAL['conn'] = $conn;
?>
