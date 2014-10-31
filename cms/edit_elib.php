<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');
include_once('include/dbconnect.php');
$id = $_GET['id'];
$e_query = mysql_query('Select lib_id, lib_src, lib_desc from elibrarys where lib_id='.$id);

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$lib_src=stripslashes($_POST['source']);
	$lib_desc=stripslashes($_POST['title']);
	$e_update_query= mysql_query("Update elibrarys set lib_src = '$lib_src', lib_desc='$lib_desc' where lib_id=$id") or die(mysql_error());
	header("location: e-library.php");
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
					<h3>E-Library Configuration</h2>
					<form action="" method="post" enctype="multipart/form-data">
					<fieldset>
					<legend><b>Edit</b></legend>
					<table class="noborder">
						<tr>
							<th class="nobg" width="100px"></th>
							<th class="nobg" width="200px"></th>
							
						</tr>
						<?php $e_data = mysql_fetch_object($e_query); 
						echo '<tr>
							<td class="noborder">Source</td>
							<td class="noborder"><input type="text" name="source" value="'.$e_data->lib_src.'" placeholder="Enter the link of Library Source" style="width:400px" required></input></td>
						</tr>
						<tr>
							<td class="noborder">Title</td>
							<td class="noborder"><input type="text" name="title" value="'.$e_data->lib_desc.'" placeholder="Enter the Title or name to represent the link" style="width:400px" required></input></td>
						</tr>';
						?>
						<tr>
							<td class="noborder"></td>
							<td class="noborder" style="padding-top:5px"><input onclick="window.confirm('Are you sure, you want to update e-library link?')" class="button green" type="submit" value="Update"></input></td>
						</tr>
					</table>
					</fieldset>
					</form>
					<br/>
					<div style="display:block"><a href="e-library.php">Back to e-Library</a></div>	
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