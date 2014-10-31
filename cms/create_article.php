<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');
include_once('include/dbconnect.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$source=stripslashes($_POST['source']);
	$title=stripslashes($_POST['title']);
	$article_query = mysql_query("insert into articles (content_src, article_name) values('$source','$title');") or die(mysql_error());
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
					
			</header>

		</div>
	</div>
	
<div class="body2" style="padding-bottom:20px">
	<div class="main" >
<!-- content -->
		<section id="content">
			<div class="marg_top wrapper">
				<article style="width:500px">
					<h3>Article Configuration</h2>
					<form action="" method="post">
					<fieldset>
					<legend><b>Create Article</b></legend>
					<table class="noborder">
						<tr>
							<th class="nobg" width="100px"></th>
							<th class="nobg" width="600px"></th>
							
						</tr>
						<tr>
							<td class="noborder">Source </td>
							<td class="noborder"><input type="text" name="source" placeholder="Enter source" required></input><br/> <span style="color:red; font-size:12px">Source Format: http://www.websitename.com</span></td>
						</tr>
						<tr>
							<td class="noborder">Title</td>
							<td class="noborder"><input type="text" name="title" placeholder="Enter Title" required></input></td>
						</tr>
						
						<tr>
							<td class="noborder"></td>
							<td class="noborder" style="padding-top:5px"><input onclick="window.confirm('Are you sure, you want to create Article?')" class="button green" name="submit" type="submit" value="Create"></input></td>
						</tr>
					</table>
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