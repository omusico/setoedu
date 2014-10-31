<?php
include('include/dbconnect.php');
session_start();
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select std_id from students where std_id='$user_check' ");

$row=mysql_fetch_array($ses_sql);
$rcount=mysql_num_rows($result);

if($rcount==1)
{
	continue;
}
else
{
	header("Location:elibrary-login.php");
}
?>