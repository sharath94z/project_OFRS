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
//$name = "sharath";

// echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1",$username,$password,$db_name, 3306);
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
// $result = $mysqli->query("select s.schedule_id,l.lname,se.sname,s.start_time,p.provider_name,s.end_time
//                       from schedule s join locations l on s.locationid_fk=l.pincode join services se on s.serviceid_fk=se.service_id join provider_members p on s.providerid_fk = p.id");

    $result = $mysqli->query("select s.schedule_id,l.lname,se.sname,s.start_time,p.provider_name,s.end_time
                      from schedule s join locations l on s.locationid_fk=l.pincode join services se on s.serviceid_fk=se.service_id join provider_members p on s.providerid_fk = p.id WHERE l.lname='$loc' AND p.provider_name='$pro' AND se.sname='$ser'");
//$query = $mysqli->query("SELECT sname FROM services ORDER BY sname ASC");
// need to filter
 ?>