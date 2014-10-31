<?php
$host = '69.162.154.49:3307';
$user = 'djoshi_seto';
$pass = '123white$$$';
$dbname = 'djoshi_seto';

$dbconnect = mysql_connect($host,$user,$pass) or die("Could not find the database server");
$dbselect = mysql_select_db($dbname,$dbconnect)or die("Could not connect to the database");

/*if ($dbselect)
{
	echo "Database Found";
}*/
?>
