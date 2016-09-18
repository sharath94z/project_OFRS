<?php
include '../global_config/databaseconfig.php';
global $loc,$ser,$pro;
if(isset($_POST['location'])){ $loc = $_POST['location']; }
if(isset($_POST['provider'])){ $pro = $_POST['provider']; }
if(isset($_POST['service'])){ $ser = $_POST['service']; }
// echo $loc.' '.$pro.' '.$ser;
$mysqli = new mysqli($host,$username,$password,$db_name);
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$name = "sharath";

// echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1",$username,$password,$db_name, 3306);
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
 $result = $mysqli->query("select a.app_id,m.firstname,s.schedule_id\n"
    . "from appointment a join members m on m.id = a.custfk_id join schedule s on s.schedule_id = a.schedulefk_id");
 ?>