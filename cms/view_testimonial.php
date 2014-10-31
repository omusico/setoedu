<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php'); 
include_once('include/check_session.php');
include_once('include/dbconnect.php');
$id = $_GET['id'];
$t_query = mysql_query('Select user_id, user_name, user_msg, photo_path from testimonials where user_id='.$id);
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
						</div>
					</header>
				</div>
			</div>
	
<div class="body2" style="padding-bottom:20px">
	<div class="main" >
		<section id="content">
			<div class="marg_top wrapper">
				<article class="col2 pad_left1">
					<h3>Testimonial Configuration</h2>
					<form action="" method="post">
					<fieldset>
					<legend><b>Testimonial Detail</b></legend>
						<?php $t_data = mysql_fetch_object($t_query); 
							echo '<p>
							<b>Full Name</b><br/>'.$t_data->user_name.'<br/><br/>
							<b>Message</b><br/>'.$t_data->user_msg.'<br/><br/>
							<b>Photo</b><br/><img src="../'.$t_data->photo_path.'">
							</p>';						
						 ?>
					</fieldset>
					</form>
					<br/>
					<div style="display:block"><a href="testimonial.php">Back to Testimonial</a></div>	
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