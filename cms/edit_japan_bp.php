<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');
include_once('include/dbconnect.php');
$id = $_GET['id'];
$n_query = mysql_query('Select id, college_name from japan where id='.$id);

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$c_name=stripslashes($_POST['college']);
	$news_query = mysql_query("Update japan set college_name = '$c_name' where id=$id") or die(mysql_error());
	header("location: business.php");
}
?>



</head>
	<body id="page1">
		<div class="body3"></div>
			<div class="body1">
				<div class="main">
			<header>	
				<div>
					<?php include_once('include/nav.php'); ?>
				</div>
					<div class="wrapper">
			
						<div class="logobg">
							<img  style="padding-bottom:25px" src="images/logo.png" alt="">
						</div> 
						<?php include_once('include/rightbar.php');?>
					
			</header>

		</div>
	</div>
	
<div class="body2" style="padding-bottom:20px">
	<div class="main" >
<!-- content -->
		<section id="content">
			<div class="marg_top wrapper">
				<article style="width:600px">
					<h3>Business Partner Configuration</h2>
					<form action="" method="post" enctype="multipart/form-data">
					<fieldset>
					<legend><b>Business Partner of Japan</b></legend>
					<table class="noborder">
						<tr>
							<th class="nobg" width="100px"></th>
							<th class="nobg" width="200px"></th>
							
						</tr>
						<?php $n_data = mysql_fetch_object($n_query); 
						echo '<tr>
							<td class="noborder">College Name</td>
							<td class="noborder"><input type="text" name="college" value="'.$n_data->college_name.'" placeholder="Enter College name and address separated by comma" style="width:400px" required></input></td>
						
						</tr>';
						?>
						<tr>
							<td class="noborder"></td>
							<td class="noborder" style="padding-top:5px"><input onclick="window.confirm('Are you sure, you want to update business partner?')" class="button green" type="submit" value="Update"></input></td>
						</tr>
					</table>
					</fieldset>
					</form>
					<br/>
					<div style="display:block"><a href="business.php">Back to Business Partner</a></div>	
				</article>
			</div>
		</section>
<!-- / content -->
	</div>
</div>
<div class="main">

<!-- footer -->
	<footer>
		<div class="wrapper">
			<?php include_once('include/footer.php'); ?>
		</div>
	</footer>
<!-- / footer -->
</div>

<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>