<?php
@session_start();
 include '../global_config/databaseconfig.php';
global $c;
// if(isset($_POST['srname'])){ $srname = $_POST['srname']; }
global $user;
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];}
  $mysqli = new mysqli($host,$username,$password,$db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1",$username,$password,$db_name, 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$count=$mysqli->query("select count(app_id) as count from appointment where serviceid_fk=1001");
$row = mysqli_fetch_assoc($count);
$c = $row['count'];
$count=$mysqli->query("select count(app_id) as count from appointment where serviceid_fk=1000");
$row = mysqli_fetch_assoc($count);
$y = $row['count'];
$count=$mysqli->query("select count(app_id) as count from appointment where serviceid_fk=1002");
$row = mysqli_fetch_assoc($count);
$c = $row['count'];
//get matched data from skills table
$count1=$mysqli->query("select count(m.gender) as male from appointment a join members m on a.custfk_id=m.id where m.gender='M'");
$row = mysqli_fetch_assoc($count1);
$male = $row['male'];
$countf=$mysqli->query("select count(m.gender) as female from appointment a join members m on a.custfk_id=m.id where m.gender='F'");
$row = mysqli_fetch_assoc($countf);
$female = $row['female'];
?>
