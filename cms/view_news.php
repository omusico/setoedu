<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');
include_once('include/dbconnect.php');
$id = $_GET['id'];
$n_query = mysql_query('Select news_id, date, title, description from newsupdates where news_id='.$id);
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
					<h3>News Configuration</h2>
					<form action="" method="post">
					<fieldset>
					<legend><b>News Detail</b></legend>
						<?php $n_data = mysql_fetch_object($n_query); 
							echo '<p>
							<b>Title</b><br/>'.$n_data->title.'<br/><br/>
							<b>News Detail</b><br/>'.$n_data->description.'<br/><br/>
							<b>Posted Date</b><br/>'.$n_data->date.'
							</p>';
							?>
					</fieldset>
					</form>
					<br/>
					<div style="display:block"><a href="news.php">Back to News</a></div>	
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