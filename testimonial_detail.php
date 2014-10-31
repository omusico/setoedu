<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy for Japanese Lanaguage Studies </title>
<?php
	//$id = $_GET['id'];
	include_once('prerequisite.php');
	include_once('include/dbconnect.php');
	$t_details_query = mysql_query('Select user_id, user_name, user_msg, photo_path from testimonials');
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
				<section id="content">
					<div class="wrapper marg_top2">
					<!--side menu bar-->
					<?php
						include_once('include/testimonial-sidebar.php');
					?>
					<!--Side menu bar-->
					<!--Main Content of the Website-->
						<article class="col2 pad_left1">
							<div class="pad">
								<h2 class="start">Testimonials</h2>
									<table style="text-align:justify">
									<?php while ($t_details_data = mysql_fetch_object($t_details_query)) {
										echo '<tr>
												<td style="padding:10px 0px 10px 0px"><figure><img src="'.$t_details_data->path.'" alt="" class="left marg_right1"></figure></td>
												<td style="padding:10px 0px 10px 0px"><span class="color1">'.$t_details_data->user_name .'</span><br>'.
												$t_details_data->user_msg.'</td></tr>';
										}
									?>
								</table>
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