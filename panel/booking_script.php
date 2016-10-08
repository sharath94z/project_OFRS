<?php
@session_start();
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];}
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


$cred=$mysqli->query("select credits from members where username='$user'");
$row = mysqli_fetch_assoc($cred);
$nocredits=$row['credits'];
echo $nocredits;

if($loc =='all' and $pro =='all' and $ser == 'all')
{
	 $result = $mysqli->query("select s.schedule_id,l.lname,DATE_FORMAT(s.date,'%d-%m-%Y') as date,se.sname,DATE_FORMAT(s.start_time,'%h:%i %p') as start_time,p.provider_name,DATE_FORMAT(s.end_time,'%h:%i %p') as end_time
                      from schedule s join locations l on s.locationid_fk=l.pincode join services se on s.serviceid_fk=se.service_id join provider_members p on s.providerid_fk = p.id where s.date >= CURDATE()");
}
else{
    $result = $mysqli->query("select s.schedule_id,l.lname,se.sname,DATE_FORMAT(s.date,'%d-%m-%Y') as date,DATE_FORMAT(s.start_time,'%h:%i %p') as start_time,p.provider_name,DATE_FORMAT(s.end_time,'%h:%i %p') as end_time
                      from schedule s join locations l on s.locationid_fk=l.pincode join services se on s.serviceid_fk=se.service_id join provider_members p on s.providerid_fk = p.id WHERE l.lname='$loc' AND p.provider_name='$pro' AND se.sname='$ser' AND s.date >= CURDATE()");
}

//$query = $mysqli->query("SELECT sname FROM services ORDER BY sname ASC");
// need to filter
// TIME_FORMAT( '22:00:00', '%h:%i %p' );
 ?>