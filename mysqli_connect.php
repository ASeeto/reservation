<?php
$dbc = mysqli_connect('alexseetocom.ipagemysql.com', 'snell', 'snell123'); 
if (!$dbc) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully'; 
mysqli_select_db(snell); 
?>