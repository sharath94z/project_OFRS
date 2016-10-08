<?php
//session_start();
@session_start();
 include '../global_config/databaseconfig.php';
global $user,$dob;
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];}
 global $fname,$lname,$phno,$gender,$dob,$loc,$fn,$ln,$ph;
if(isset($_POST['fname'])){ $fname = $_POST['fname']; }
if(isset($_POST['lname'])){ $lname = $_POST['lname']; }
if(isset($_POST['phno'])){ $phno = $_POST['phno']; }
if(isset($_POST['gender'])){ $gender = $_POST['gender']; }
if(isset($_POST['dob'])){ $dob = $_POST['dob']; }
if(isset($_POST['loc'])){ $loc = $_POST['loc']; }

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
$cid=$mysqli->query("select firstname,lastname,phoneno,dob from members where username='$user'");
$row = mysqli_fetch_assoc($cid);
$fn = $row['firstname'];
$ln=$row['lastname'];
$ph=$row['phoneno'];
// $dob=$row['dob'];
// echo $mysqli->host_info . "\n";
$result = $mysqli->query("UPDATE `members` SET `firstname`='$fname',`lastname`='$lname',`phoneno`='$phno',`gender`='$gender',`dob`='$dob',`location`='$loc' WHERE username='$user'");
//printf("Affected rows (SELECT): %d\n", $mysqli->affected_rows); ?>
