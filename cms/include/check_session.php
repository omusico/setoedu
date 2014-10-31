<?php
include_once('include/dbconnect.php'); 
session_start();
$user=$_SESSION['user'];
if(!isset($user)) {
	header("Location:index.php");
}
?>