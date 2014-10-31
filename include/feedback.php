<?php
include_once('dbconnect.php');
$name = stripslashes($_POST['name']);
$email = stripslashes($_POST['email']);
$message = stripslashes($_POST['message']);

if (!empty($name) && !empty($email) && !empty($message)) {
	$contact_query = mysql_query("insert into contacts (name, email, message) values('$name','$email', '$message');") or die(mysql_error());
	$msg = 'Your message has been sent sucessfully';
	header("Location: ../contact.php");	
}
?>