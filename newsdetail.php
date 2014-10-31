<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy for Japanese Lanaguage Studies </title>
<?php
	$id = $_GET['id'];
	include_once('prerequisite.php');
	include_once('include/dbconnect.php');
	$new_detail_query = mysql_query('Select news_id, title, description, date from newsupdates where news_id='.$id);
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
						include_once('include/news-sidebar.php');
					?>
					<!--Side menu bar-->
					<!--Main Content of the Website-->
						<article class="col2 pad_left1">
							<div class="pad">
								<h2 class="start">News Detail</h2>
									<?php
										$news_detail_data = mysql_fetch_object($new_detail_query);
										echo '<h4>'.$news_detail_data->title.'</h2>
										<h4>Posted On: '.$news_detail_data->date.'</h4></br>
										
										<p>'.$news_detail_data->description.'</p>';
									?>									
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