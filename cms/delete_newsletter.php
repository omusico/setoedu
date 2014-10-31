<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php'); 
include_once('include/check_session.php');

$letter = '../json/newsletter.json';
if(file_exists($letter) ){
	$getContent = file_get_contents($letter);
	$contentList = json_decode($getContent,true);
} else {
	echo 'File not found';
}
foreach( $contentList as $key=>$value) {
   	if (($key == $_GET['id']) && isset($_POST['submit'])) {
   		unset($contentList[$key]);
	  	$contentText = json_encode($contentList);
		file_put_contents($letter, $contentText);
		header("location: newsletter.php");
   	}
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
					<h3>Newsletter Configuration</h2>
					<form action="" method="post">
					<fieldset>
					<legend><b>Newsletter Detail</b></legend>
					<?php 
						foreach( $contentList as $key=>$value) {
							if ($key == $_GET['id']) {
								echo '<p>
									<b>Name</b><br/>'.$contentList[$key]['name'].'<br/><br/>
									<b>E-mail</b><br/>'.$contentList[$key]['email'].'<br/><br/>
								</p>';
							}
						}
					?>
					<input onclick="window.confirm('Are you sure, you want to delete news?')" class="button green" type="submit" name="submit" value="Delete"></input>
					</fieldset>
					</form>
					<br/>
					<div style="display:block"><a href="newsletter.php">Back to Newsletter</a></div>	
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