<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php 
include_once('prerequisite.php');
include_once('include/dbconnect.php');
include_once('include/check_session.php');
?>

</head>
	<body id="page1">
		<div class="body3"></div>
			<div class="body1">
				<div class="main">
		<!-- header -->
				<header>	
			<!-- Navigation menu using menu.css -->
				
		<!-- End of Navigation menu -->
				
					<!--Wrapper below Navigation menu-->			
					<div class="wrapper">
					<!-- Seto Academy Logo-->
						<div class="logobg" style="margin-top:0px">
							<img  style="padding-bottom:25px;" src="images/logo.png" alt="">
							
						</div> 
						
							<?php include_once('include/rightbar.php');?>
						
					
			</header>
		<!-- / header -->
		</div>
	</div>
	
<div class="body2">
	<div class="main" >
<!-- content -->
		<section id="content">
			<div class="marg_top wrapper" >
			<h2> Welcome To Administrative Panel</h2>
			<div>
				<ul id="iconset" >
											
					<li style="margin-left:-30px"><a href="calendar.php" title="Calendar"><img src="images/calendar.png"  alt="calendar" /></a><br/><span><a href="calendar.php" style="margin-left:30px">Calendar</a></span></li>
					<li><a href="testimonial.php"><img src="images/testimonial.jpg"  alt="Testimonial" /></a><br/><span><a href="testimonial.php" style="margin-left:20px">Testimonial</a></span></li>
					<li><a href="gallery.php"><img src="images/gallery.jpg"  alt="gallery" /></a><br/><span><a href="gallery.php" style="margin-left:30px">Gallery</a></span></li>
					<li><a href="article.php"><img src="images/article.png"  alt="article" /></a><br/><span><a href="article.php" style="margin-left:30px">Article</a></span></li>
					<li><a href="newsletter.php"><img src="images/newsletter.png"  alt="newsletter" /></a><br/><span><a href="newsletter.php" style="margin-left:45px">Newsletter</a></span></li>
					<li><a href="news.php"><img src="images/news.png"  alt="news" /></a><br/><span><a href="news.php" style="margin-left:45px">News</a></span></li>
					<li><a href="message.php"><img src="images/message.png"  alt="message" /></a><br/><span><a href="message.php" style="margin-left:35px">Message</a></span></li>
					
					
				</ul>
											
			</div>
			<article class="wrapper">
				<h2 style="margin-top:5px">Main Contents</h2>
				<ul id="iconset">
					<li style="margin-left:-50px"><a href="courses.php"><img src="images/courses.jpg"  alt="Courses" /></a><br/><span><a href="courses.php" style="margin-left:40px">Courses</a></span></li>
					<li><a href="services.php"><img src="images/services.png"  alt="Services" /></a><br/><span><a href="services.php" style="margin-left:30px">Services</a></span></li>
					<li><a href="e-library.php"><img src="images/e-library.png"  alt="e-library" /></a><br/><span><a href="e-library.php" style="margin-left:45px">E-library</a></span></li>
					<li><a href="business.php"><img src="images/business.jpg"  alt="Business Partners" /></a><br/><span><a href="business.php" style="margin-left:35px">Business Partners</a></span></li>
					
				</ul>
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