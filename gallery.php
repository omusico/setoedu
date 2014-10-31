<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy for Japanese Lanaguage Studies </title>
<?php
	include_once('prerequisite.php');
	$a_query = mysql_query('Select album_name, album_id from albums where album_name !="testimonial"');
?>
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
								<h2>Gallery</h2>
								<div>
									<ul id="image">
										<?php while ($a_data = mysql_fetch_object($a_query)) {
											$a_id = $a_data->album_id;
											$p_query = mysql_query('Select path from photos where album_id ='.$a_id.' limit 1');
											$p_data = mysql_fetch_object($p_query);
											if ($p_data->path != null) {
												$path = '<img src="../'.$p_data->path.'" width="280" height="190"/>';
												echo '<li>'.$path.'</br>
												<span><a href="album.php?id='.$a_id.'" style="margin-left:120px">'.$a_data->album_name.'</a></span></li>';
											}
											
										} ?>
									</ul>
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