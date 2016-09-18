<?php 
@session_start();
include '../global_config/databaseconfig.php';
global $sid,$pid,$aid,$cid;
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];}
if(isset($_GET['aid'])){ 
    $aid = $_GET['aid'];
    // update($aid);
}
  $cid="";
//     $del= $mysqli->query("DELETE FROM `login`.`appointment` WHERE `appointment`.`app_id` = \'$aid'");
//    delete_appointment($aid);
      
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
// function update($aid){
$cid=$mysqli->query("select custfk_id from appointment where app_id='$aid'");
$row = mysqli_fetch_assoc($cid);
$custid = $row['custfk_id'];
$mysqli->query("UPDATE members 
SET credits = credits - 1
WHERE id ='$custid'
and credits > 0");
// $mysqli->query("UPDATE `appointment` SET `status`=1 where app_id ='$aid'");
$mysqli->query("DELETE FROM `appointment` WHERE app_id='$aid'");
header("location:../provider_panel/cvisit.php");
 ?>