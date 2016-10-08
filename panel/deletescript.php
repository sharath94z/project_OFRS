<?php
@session_start();
include '../global_config/databaseconfig.php';
global $aid;
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];}
if(isset($_GET['aid'])){ 
    $aid = $_GET['aid'];
    echo $aid;
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
$cid=$mysqli->query("select id from members where username='$user'");
$row = mysqli_fetch_assoc($cid);
$custid = $row['id'];
 $result = $mysqli->query( "DELETE FROM `login`.`appointment` WHERE `appointment`.`app_id` ='$aid'");
 $increment = $mysqli->query("UPDATE `members` SET `credits`=`credits`+1 WHERE username='$user'");
header("location:../panel/cancellation.php");
 ?>