<?php
//session_start();
@session_start();
 include '../global_config/databaseconfig.php';
global $user,$dob;
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];}
//  global $fname,$lname,$phno,$gender,$dob,$loc,$fn,$ln,$ph;

  $mysqli = new mysqli($host,$username,$password,$db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1",$username,$password,$db_name, 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
// $cid=$mysqli->query("select firstname,lastname,phoneno,dob from members where username='$user'");
// $row = mysqli_fetch_assoc($cid);
// $fn = $row['firstname'];
// $ln=$row['lastname'];
// $ph=$row['phoneno'];
// // $dob=$row['dob'];
// // echo $mysqli->host_info . "\n";
$result = $mysqli->query("UPDATE `members` SET `credits`=`credits`+15 WHERE username='$user'");
header("location:../panel/panel.php");
 ?>
