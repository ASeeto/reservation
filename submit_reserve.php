<?php
if (!isset($_POST["firstname"])) {
	header("Location: reserve.php");
	exit;
}
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$equip = $_POST["equip"];
$room = $_POST["room"];
$startdate = $_POST["startdate"];
$starthour = $_POST["starthour"];
$startmin = $_POST["startmin"];
$startsec = $_POST["startsec"];
$endhour = $_POST["endhour"];
$endmin = $_POST["endmin"];
$endsec = $_POST["endsec"];

echo "<title>Snell Library | InfoCommons</title>";
echo "<br><br><center><a href=http://www.alexseeto.com/reservationproject/reserve.php><img src=/reservationproject/images/header.png></a><br><i>Click the header to return to the main site!</i><br><br>";
echo "<table border=1 cellpadding=5><tr><td colspan=3>Your requested reservation details are as follows:</td></tr>";
echo "<tr><td>First Name:</td><td>";
print $firstname;
echo "</td></tr><tr><td>Last Name:</td><td>";
print $lastname;
echo "</td></tr><tr><td>Equipment:</td><td>";
print $equip;
echo "</td></tr><tr><td>Room:</td><td>";
print $room;
echo "</td></tr><tr><td>Start Date:</td><td>";
print $startdate;
echo "</td></tr><tr><td>Start Time:</td><td>";
print $starthour.":".$startmin.":".$startsec;
echo "</td></tr><tr><td>End Time:</td><td>";
print $endhour.":".$endmin.":".$endsec;

echo "</td></tr></table></center>";
echo "<br><br>";

// Change Date Format From Calendar for STARTDATE
$dates1 = preg_split('/\//',$_POST['startdate']);

$month = $dates1[0];
$day = $dates1[1];
$year = $dates1[2];

$finalDate1 = $year.'-'.$month.'-'.$day;

// Start Time
$time1 = $starthour.":".$startmin.":".$startsec;

// End Time
$time2 = $endhour.":".$endmin.":".$endsec;

// Check date is not reserved:
$checkDate = mysql_query("SELECT * FROM reservation WHERE startdate = '$finalDate1'");
if (!$checkDate){
	die("<center>Query failed to execute for some reason</center>");
}

if (mysql_num_rows($checkDate) > 0) {
	echo "<center>Someone else has already made this reservation.</center>";
}

// Query
$sql = "INSERT INTO reservation 
		(firstname, lastname,
		 equip, room, 
		 startdate, starttime, endtime) 
		VALUES 
		('$firstname', '$lastname', 
		 '$equip', '$room', 
		 '$finalDate1', '$time1', '$time2')";

// Connection:  Source of database.php is left out for security reasons.
include 'database.php';
// $host = "XXXXXXXX"; 
// $user = "XXXXXXXX"; 
// $pass = "XXXXXXXX";
// $database = "XXXXXXXX";
// $conn = mysql_connect($host, $user, $pass) or die( mysql_error() );
//         mysql_select_db($database) or die( mysql_error() );
// $result = mysql_query( $sql ) or die( mysql_error() );
?>