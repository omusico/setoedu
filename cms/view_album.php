<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');
include_once('include/dbconnect.php');
$id = $_GET['id'];
$a_detail_query = mysql_query('Select path, photo_title, photo_desc, album_id from photos where album_id='.$id);
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
				<article style="width:960px">
					<h3>Album 1</h3>
						<div><span style="color:red; font-size:12px; text-align:center">Click on checkbox to delete the photo</span><span style="float:right;"><?php echo '<a href="upload_photo.php?id='.$id.'">Add photo</a>'; ?> | <a href="">Delete</a></span></div><br/>
								<div>
									<ul id="image">
										<?php
											while ($a_detail_data = mysql_fetch_object($a_detail_query)) {
											echo '<li>
											<a href="../'.$a_detail_data->path.'" ><img src="../'.$a_detail_data->path.'" width="280" height="190" alt="'.$a_detail_data->photo_title.'" /></a><br/>
											<span><input type="checkbox" name="photo1" style="margin-left:0px"></span></li>
										<li>';
									} ?>
										
									</ul>
									</br>
									<a style=" float:right" href="gallery.php">Back to gallery</a>
								</div>

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