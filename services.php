<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy for Japanese Lanaguage Studies </title>
<?php
	include_once('prerequisite.php');
	$s_query = mysql_query('Select id,title, description, photo_path from services;');
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
				<!---content--->
				<section id="content">
					<div class="wrapper marg_top2">
					<!---side menu bar--->
					<?php
						include_once('include/services-sidebar.php');
					?>
					<!---side menu bar--->
					<!--- Main Content of the Website--->
						<article class="col2 pad_left1">
							<div class="pad" style="text-align:justify">
							<?php while ($s_data = mysql_fetch_object($s_query)) {
							echo'
								<h2 class="start">'.$s_data->title.'</h2>
								<p><figure style="float:left; padding-right:10px;"><img src="'.$s_data->photo_path.'"></img></figure>'.$s_data->description.'</p>';
								}
								
							?>
							</div>
						</article>
					<!---End of Main Content--->
					</div>
				</section>
				<!---Content--->
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