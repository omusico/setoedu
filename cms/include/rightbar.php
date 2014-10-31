<?php 
$user=$_SESSION['user'];
echo '<div style="margin-top:-25px;float:right">
	Welcome '.$user.' | <a href="cms_main.php">Home</a> | <a href="logout.php">Logout</a>
</div>';
?>