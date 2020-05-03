<?php
  //echo "test";
  $mysql_serv="localhost";
  $mysql_user="joedirt123";
  $mysql_pass="joedirt123";
  $mysql_db="deminicos";

  // Create connection
  $conn = mysqli_connect($mysql_serv, $mysql_user, $mysql_pass, $mysql_db);
  //$conn = mysql_connect($mysql_serv, $mysql_user, $mysql_pass);

  // Check connection
  if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
  }
  // echo "Connected successfully";
//  mysql_select_db($mysql_db,$conn);
?>
