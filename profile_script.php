<?php
  include '../global_config/databaseconfig.php';
  echo $host;
  $tbl_name = "members";
  // $host = "localhost"; // Host name
  // $username = "root"; // Mysql username
  // $password = ""; // Mysql password
  // $db_name = "login"; // Database name
  // $tbl_name = "members"; // Table name
  //CONNECTION
  $mysqli = new mysqli($host,$username, "password", "database");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "user", "password", "database", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";

 ?>
