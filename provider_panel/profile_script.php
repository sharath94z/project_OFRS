<?php
//session_start();
@session_start();
 include '../global_config/databaseconfig.php';
global $user;
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];}
 global $cname,$phno,$loc;
if(isset($_POST['cname'])){ $cname = $_POST['cname']; }
if(isset($_POST['phno'])){ $phno = $_POST['phno']; }
if(isset($_POST['location'])){ $loc = $_POST['location']; }

// $lname = $_POST['lname'];
//$user variable contains the username

  $tbl_name = "members";
  // $host = "localhost"; // Host name
  // $username = "root"; // Mysql username
  // $password = ""; // Mysql password
  // $db_name = "login"; // Database name
  // $tbl_name = "members"; // Table name
  //CONNECTION
  $mysqli = new mysqli($host,$username,$password,$db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1",$username,$password,$db_name, 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
// echo $mysqli->host_info . "\n";

$result = $mysqli->query("UPDATE `provider_members` SET `location`='$loc',`phone_number`='$phno',`provider_name`='$cname' WHERE username='$user'");


// printf("Affected rows (SELECT): %d\n", $mysqli->affected_rows);

 ?>
