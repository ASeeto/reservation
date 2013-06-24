<?php
echo "<title>Snell Library | InfoCommons</title>";
$sql = "SELECT * FROM reservation";

// Connection:  Source of database.php is left out for security reasons.
include 'database.php';

// Execute Query          
$result = mysql_query($sql);
            if(!$result) {
                echo "Cannot do query" . "<br/>";
                exit;
            }

// Print the results
$num_results = mysql_num_rows($result);
	
	echo "<br><br><center><a href=http://www.alexseeto.com/reservationproject/reserve.php><img src=/reservationproject/images/header.png></a><br><br>Click the header to return to the main site and make a reservation!<br><br>";
	echo "<table border=1 cellpadding=5 width=800>";
	echo "<tr><td>ID</td>";
	echo "<td>First Name</td>";	
	echo "<td>Last Name</td>";	
	echo "<td>Equipment</td>";	
	echo "<td>Room</td>";	
	echo "<td>Start Date</td>";
	echo "<td>Start Time</td>";
	echo "<td>End Date</td>";
	echo "<td>End Time</td></tr>";
	
for ($i=0; $i<$num_results; $i++) {
	$row = mysql_fetch_assoc ($result);
    echo "<tr><td>" . $row['id'] . "</td>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
	echo "<td>" . $row['equip'] . "</td>";
	echo "<td>" . $row['room'] . "</td>";
	echo "<td>" . $row['startdate'] . "</td>";
	echo "<td>" . $row['starttime'] . "</td>";
	echo "<td>" . $row['enddate'] . "</td>";
	echo "<td>" . $row['endtime'] . "</td></tr>";
	}
	echo "</table></center><br><br>";
?>