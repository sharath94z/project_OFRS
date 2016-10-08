<?php
@session_start();
include '../global_config/databaseconfig.php';
global $user,$scheduleid,$newid,$nocredits;
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];}
if(isset($_GET['editid'])){ $scheduleid = $_GET['editid']; }
//echo $user;
//echo $scheduleid;
// echo $loc.' '.$pro.' '.$ser;
$mysqli = new mysqli($host,$username,$password,$db_name);
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//$name = "sharath";

// echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1",$username,$password,$db_name, 3306);
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
	$newid = uniqid (rand(), false);
$cid=$mysqli->query("select id from members where username='$user'");
$cred=$mysqli->query("select credits from members where username='$user'");
$row = mysqli_fetch_assoc($cred);
$nocredits=$row['credits'];
echo $nocredits;

$row = mysqli_fetch_assoc($cid);
$custid=$row['id'];
$details=$mysqli->query("SELECT `schedule_id`, `providerid_fk`, `serviceid_fk`, `locationid_fk`, `date`, `start_time`, `end_time` FROM `schedule` WHERE `schedule_id`='$scheduleid'");
$row = mysqli_fetch_assoc($details);
$pid = $row['providerid_fk'];
$sid = $row['serviceid_fk'];
$lid = $row['locationid_fk'];
echo $pid;
if($nocredits > 0){
 $result=$mysqli->query("INSERT INTO `appointment`(`app_id`, `custfk_id`, `schedulefk_id`, `providerid_fk`, `serviceid_fk`, `locationid_fk`) VALUES ('$newid','$custid','$scheduleid','$pid','$sid','$lid')");
  $result = $mysqli->query("UPDATE `members` SET `credits`=`credits`-1 WHERE username='$user' and credits>0");
}
else
{
	echo "<h1>NO CREDITS</h1>";
}

header("location:../panel/booking.php");
 ?>