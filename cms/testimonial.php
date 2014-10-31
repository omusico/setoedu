<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php'); 
include_once('include/check_session.php');
include_once('include/dbconnect.php');
$t_query = mysql_query('Select user_id, user_name, user_msg, photo_path from testimonials');
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
					<h3>Testimonial Configuration</h2>
					<div style="display:block"><a href="create_testimonial.php">Create</a></div><br/>
					<table>
						<tr>
							<th width="150px" align="left">Full Name</th>
							<th width="650px" align="left">Message</th>
							<th width="250px" align="left">Photo</th>
							<th width="200px" align="left">Action</th>
						</tr>
						<?php while ($t_data = mysql_fetch_object($t_query)) {
							echo '<tr>
							<td>'.$t_data->user_name .'</td>
							<td>'.$t_data->user_msg.'</td>
							<td><img src="../'.$t_data->photo_path.'"></td>
							<td><a href="edit_testimonial.php?id='.$t_data->user_id.'">Edit</a> | <a href="view_testimonial.php?id='.$t_data->user_id.'">Detail</a> | <a href="delete_testimonial.php?id='.$t_data->user_id.'">Delete</a></td>
							</tr>';
						} ?>
						</div>
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