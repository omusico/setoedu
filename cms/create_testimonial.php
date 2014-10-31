<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php'); 
include_once('include/check_session.php');
include_once('include/dbconnect.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$text = stripslashes($_POST['name']);
	$desc = stripslashes($_POST['desc']);
	$pName = $_FILES["pic"]["name"];
	$pTempName = $_FILES["pic"]["tmp_name"];
    if (file_exists("../images/" . $pName)) {
		$imgError = $pName . " already exists. ";
	} else {
		move_uploaded_file($pTempName, "../images/" . $pName);
		$path = 'images/'.$pName;
		$article_query = mysql_query("insert into testimonials (user_name, user_msg, photo_path) values('$text','$desc', '$path');") or die(mysql_error());		
	}
	header("location: testimonial.php");
}
?>



</head>
	<body id="page1">
		<div class="body3"></div>
			<div class="body1">
				<div class="main">
		<!-- header -->
				<header>	
			<!-- Navigation menu using menu.css-->
				<div>
					<?php include_once('include/nav.php'); ?>
				</div>
		<!-- End of Navigation menu-->
				
					<!--Wrapper below Navigation menu-->			
					<div class="wrapper">
					<!-- Seto Academy Logo-->
						<div class="logobg">
							<img  style="padding-bottom:25px" src="images/logo.png" alt="">
						</div> 
						<?php include_once('include/rightbar.php');?>
					
			</header>
			
		<!-- / header -->
		</div>
	</div>
	
<div class="body2" style="padding-bottom:20px">
	<div class="main" >
<!-- content -->
		<section id="content">
			<div class="marg_top wrapper">
				<article style="width:500px">
					<h3>Testimonial Configuration</h2>
					<form action="" method="post" enctype="multipart/form-data">
					<fieldset>
					<legend><b>New Testimonial</b></legend>
					<div><?php if(isset($imgError)) { echo $imgError; } ?></div>
					<table class="noborder">
						<tr>
							<th class="nobg" width="100px"></th>
							<th class="nobg" width="200px"></th>
							
						</tr>
						<tr>
							<td class="noborder">Full Name</td>
							<td class="noborder"><input type="text" name="name" placeholder="Enter Full Name" required></input></td>
						</tr>
						<tr>
							<td class="noborder">Message</td>
							<td class="noborder"><textarea name="desc" rows="4" cols="40" placeholder="Enter Message Here" required></textarea></td>
						</tr>
						<tr>
							<td class="noborder">Upload Photo</td>
							<td class="noborder"><input type="file"  name="pic" accept="image/*" required><br/><span style="color:red; font-size:12px">Please only select 60 X 60 photo.</span></td>
						</tr>
						<tr>
							<td class="noborder"></td>
							<td class="noborder" style="padding-top:5px"><input onclick="window.confirm('Are you sure, you want to create new testimonial?')" class="button green" name="submit" type="submit" value="Create"></input></td>
						</tr>
					</table>
					</fieldset>
					</form>
					<br/>
					<div style="display:block"><a href="testimonial.php">Back to Testimonial</a></div>	
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