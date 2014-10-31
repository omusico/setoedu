<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy for Japanese Lanaguage Studies </title>
<?php
	include_once('prerequisite.php');
	include_once('include/dbconnect.php');
	$id = $_GET['id'];
	$a_detail_query = mysql_query('Select path, photo_title, photo_desc, album_id from photos where album_id='.$id);
?>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="all" charset="utf-8" />
<!-- js file for gallery slide show-->
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto({
			animation_speed:'norma',
			slideshow:5000, 
			autoplay_slideshow: true, 
			social_tools:false,	
			overlay_gallery: true
		});
	});
</script>
</head>
	<body id="page2">
		<div class="body3"></div>
		<div class="body1">
			<div class="main">
				<header>	
					<?php 
						include_once('include/header.php');
					?>
				</header>
			</div>
		</div>
		<div class="body2">
			<div class="main" >
				<!---content-->
				<section id="content">
					<div class="wrapper marg_top2">
					<!---side menu bar-->
					<?php
						include_once('include/japanfact-sidebar.php');
					?>
					<!---side menu bar-->
					<!--- Main Content of the Website-->
						<article class="col2 pad_left1">
							<div class="pad">
								<h2>Album 1</h2>
								<div>
									<ul id="image">
										<?php
											while ($a_detail_data = mysql_fetch_object($a_detail_query)) {
											echo '<li><a href="'.$a_detail_data->path.'" rel="prettyPhoto[album1]" title="'.$a_detail_data->photo_desc.'"><img src="'.$a_detail_data->path.'" width="280" height="190" alt="'.$a_detail_data->photo_title.'" /></a></li>';
											}
										?>		
									</ul>
									</br>
									<a style="padding-right:8px; float:right" href="gallery.php">Back to gallery</a>
								</div>
							</div>
						</article>
					<!---End of Main Content-->
					</div>
				</section>
				<!---Content-->
			</div>
		</div>
	<div class="main">
		<footer>
			<?php 
					include_once('include/footer.php');
			?>
		</footer>
	</div>

<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>