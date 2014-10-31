<?php
include_once('include/dbconnect.php');
$i=81;

for($i=81;$i<=100;$i++)
{
	$id='SEAC'.$i;
	echo $id.'<br/>';
	$qry="INSERT INTO `students`( `std_id`) VALUES ('$id')";
	$result=mysql_query($qry);
	
}
echo 'Done';
?>