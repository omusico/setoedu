<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');
include_once('include/dbconnect.php');
$n_query = mysql_query('Select news_id, date, title, description from newsupdates order by date desc');
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
					<h3>News Configuration</h2>
					<div style="display:block"><a href="create_news.php">Create</a></div><br/>
					<table>
						<tr>
							<th width="150px" align="left">Title</th>
							<th width="650px" align="left">News Detail</th>
							<th width="250px" align="left">Posted Date</th>
							<th width="200px" align="left">Action</th>
						</tr>
						<?php while ($n_data = mysql_fetch_object($n_query)) {
							echo '<tr>
							<td>'.$n_data->title.'</td>
							<td>'.$n_data->description.'</td>
							<td>'.$n_data->date.'</td>
							<td><a href="edit_news.php?id='.$n_data->news_id.'">Edit</a> | <a href="view_news.php?id='.$n_data->news_id.'">Detail</a> | <a href="delete_news.php?id='.$n_data->news_id.'">Delete</a></td>
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