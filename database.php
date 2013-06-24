<?php
$host = "alexseetocom.ipagemysql.com"; 
$user = "snell"; 
$pass = "snell123";
$database = "snell";

$conn = mysql_connect($host, $user, $pass) or die( mysql_error() );
        mysql_select_db($database) or die( mysql_error() );

$result = mysql_query( $sql ) or die( mysql_error() );
?>