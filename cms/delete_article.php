<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php'); 
include_once('include/check_session.php');
include_once('include/dbconnect.php');
$id = $_GET['id'];
$a_query = mysql_query('Select article_id, content_src, article_name from articles where article_id='.$id);
if(isset($_POST["submit"])) {
	$news_query = mysql_query("Delete from articles where article_id=$id") or die(mysql_error());
	header("location: article.php");
}
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
					<h3>Article Configuration</h2>
					<form action="" method="post">
					<fieldset>
					<legend><b>Article Detail</b></legend>
					<?php $a_data = mysql_fetch_object($a_query);
						echo '<p>
							<b>Source</b><br/>'.$a_data->content_src.'<br/><br/>
							<b>Title</b><br/>'.$a_data->article_name.'							
						</p>';
					?>
							<input onclick="window.confirm('Are you sure, you want to delete Article?')" class="button green" name="submit" type="submit" value="Delete"></input>
					</fieldset>
					</form>
					<br/>
					<div style="display:block"><a href="article.php">Back to Article</a></div>	
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