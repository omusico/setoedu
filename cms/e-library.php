<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');
include_once('include/dbconnect.php');
	$e_query = mysql_query('Select lib_id, lib_src, lib_desc from elibrarys');
	
	
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
				<article class="awidth">
					<h3>E-library Configuration</h3>
					<div style="display:block"><a href="create_elib.php">Create</a></div><br/>
					<table>
						<tr>
							<th width="50px" align="left">Source</th>
							<th width="550px" align="left">Title</th>
							<th width="100px" align="left">Action</th>
							
						</tr>
						<?php while ($e_data = mysql_fetch_object($e_query)) {
							echo '<tr>
							<td>'.$e_data->lib_src.'</td>
							<td>'.$e_data->lib_desc.'</td>
							
							<td><a href="edit_elib.php?id='.$e_data->lib_id.'">Edit</a> | <a href="delete_elib.php?id='.$e_data->lib_id.'">Delete</a></td>
							</tr>';
						} ?>
						
					</table>
							
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