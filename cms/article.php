<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php'); 
include_once('include/check_session.php');
include_once('include/dbconnect.php');
	$a_query = mysql_query('Select article_id, content_src, article_name from articles');
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
					<h3>Article Configuration</h2>
					<div style="display:block"><a href="create_article.php">Create</a></div><br/>
					<table>
						<tr>
							<th width="150px" align="left">Source</th>
							<th width="350px" align="left">Title</th>
							<th width="150px" align="left">Action</th>
						</tr>
						<?php while ($a_data = mysql_fetch_object($a_query)) {
						echo '<tr>
							<td>'.$a_data->content_src.'</td>
							<td>'.$a_data->article_name.'</td>
							<td><a href="edit_article.php?id='.$a_data->article_id.'">Edit</a> | <a href="delete_article.php?id='.$a_data->article_id.'">Delete</a></td>
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