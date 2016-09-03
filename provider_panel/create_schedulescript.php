<?php
@session_start();
 include '../global_config/databaseconfig.php';
global $srname,$date,$stime,$etime;
if(isset($_POST['srname'])){ $srname = $_POST['srname']; }
if(isset($_POST['date'])){ $date = $_POST['date']; }
if(isset($_POST['s_time'])){ $stime = $_POST['s_time']; }
if(isset($_POST['e_time'])){ $etime = $_POST['e_time']; }
global $user;
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];}
$newid = uniqid (rand(), false); 
//date_create
//$var = '20/04/2012';
//$date_f = str_replace('/', '-', $date);
//$dateformat=date('Y-m-d', strtotime($date_f));//date
//date_create
$dateformat=date("Y-m-d", strtotime($date));


//STR_TO_DATE('20/10/2014 05:39 PM', '%d/%m/%Y %h:%i %p')

// global $cname;global $phno;global $loc;
//$user variable contains the username
//----------------- $newid = uniqid (rand(), false);                    //dont know wether the ajax data is passing or not
  $tbl_name = "locations";
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

$sid=$mysqli->query("SELECT `service_id` FROM `services` WHERE `sname` IN ('$srname')");
$row = mysqli_fetch_assoc($sid);
$serid = $row['service_id'];//service_id fecteched
//while ($row = $sid->fetch_assoc()) {
//    echo $row['service_id'];
//}
$pidq=$mysqli->query("SELECT `id` FROM `provider_members` WHERE `username` IN ('$user')");
$row = mysqli_fetch_assoc($pidq);
$prid = $row['id'];

$locq=$mysqli->query("SELECT `location` FROM `provider_members` WHERE `username` IN ('$user')");
$row = mysqli_fetch_assoc($locq);
$loc = $row['location'];//location feteched

$locpin=$mysqli->query("SELECT `pincode` FROM `locations` WHERE `lname` IN ('$loc')");
$row = mysqli_fetch_assoc($locpin);
$locid = $row['pincode'];//locaton id fetched

$query = $mysqli->query("INSERT INTO `schedule`(`schedule_id`, `providerid_fk`, `serviceid_fk`, `locationid_fk`, `date`, `start_time`, `end_time`) VALUES ('$newid','$prid','$serid','$locid','$dateformat','$stime','$etime')");
//if(!$query = $mysqli->query("INSERT INTO `schedule`(`schedule_id`, `providerid_fk`, `serviceid_fk`, `locationid_fk`, `date`, `start_time`, `end_time`) VALUES ('$newid','$prid','$serid','$locid','$dateformat','$stime','$etime')"))
//    {
//    echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
//}

//get matched data from skills table
$query = $mysqli->query("SELECT sname FROM services ORDER BY sname ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['sname'];
}
//return json data
//echo json_encode($data);


?>
