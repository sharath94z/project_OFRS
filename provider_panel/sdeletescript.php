<?php
@session_start();
include '../global_config/databaseconfig.php';
global $sid,$pid;
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];}
if(isset($_GET['sid'])){ 
    $sid = $_GET['sid'];
    // echo $sid;
//     $del= $mysqli->query("DELETE FROM `login`.`appointment` WHERE `appointment`.`app_id` = \'$aid'");
//    delete_appointment($aid);
               }
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
$pid=$mysqli->query("select id from provider_members where username='$user'");
$row = mysqli_fetch_assoc($pid);
$pid = $row['id'];
 $result = $mysqli->query( "DELETE FROM `login`.`schedule` WHERE `schedule`.`schedule_id` ='$sid' and `schedule`.`providerid_fk` ='$pid'");
header("location:../provider_panel/scancel.php");
 ?>