<?php
@session_start();
include '../global_config/databaseconfig.php';
global $aid;
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];}
if(isset($_GET['aid'])){$aid = $_GET['aid'];}
//if(isset($_POST['location'])){ $loc = $_POST['location']; }
$mysqli = new mysqli($host,$username,$password,$db_name);
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
// echo $mysqli->host_info . "\n";
$mysqli = new mysqli("127.0.0.1",$username,$password,$db_name, 3306);
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$pid = $mysqli->query("select id from provider_members where username='$user'");
$row = mysqli_fetch_assoc($pid);
$pid = $row['id'];
$cid=$mysqli->query("select id from members where username='$user'");
$row = mysqli_fetch_assoc($cid);
$custid = $row['id'];
$result = $mysqli->query("select s.schedule_id,l.lname,p.username,se.sname,DATE_FORMAT(s.date,'%d-%m-%Y') as date,DATE_FORMAT(s.start_time,'%h:%i %p') as start_time,DATE_FORMAT(s.end_time,'%h:%i %p') as end_time
                      from schedule s join locations l on s.locationid_fk=l.pincode join services se on s.serviceid_fk=se.service_id join provider_members p on s.providerid_fk = p.id where providerid_fk='$pid'");
 ?>