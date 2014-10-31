<?php 
include_once('include/dbconnect.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$date = date('Y-m-d');
	$name=stripslashes($_POST['name']);
	$email=stripslashes($_POST['email']);
	$msg=stripslashes($_POST['message']);
	$contact_query = mysql_query("insert into contacts (name, email, message, date) values('$name', '$email', '$msg', '$date');") or die(mysql_error());
	$success_msg = 'Your message has been sent sucessfully.';
}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<script src="js/weather.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/menu.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.7.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script src="js/weather.js" type="text/javascript"></script>
</head>
	<body id="page1">
		<div class="body3"></div>
			<div class="body1">
				<div class="main">
					<header>	
						<?php
						include_once('include/nav.php');
						?>
						<div class="wrapper">
							<div class="logogallery">
								<img  src="images/logo.png" alt="">
							</div> 
						</div>
					</header>
				</div>
			</div>
		<div class="body2">
			<div class="main">
				<!-- content -->
				<section id="content">
					<div class="marg_top wrapper">
						<article class="col1">
							<div class="box1_out">
								<div class="box1">
									<h2>Our Contacts</h2>
									<div class="wrapper">
										<article class="col2">
											<p>
												<strong>
													Company:</br>
													Country:<br>
													City:<br>
													Address:<br>
													Phone:<br>
													Email:
												</strong>
											</p>
										</article>
										<article class="col3" style="margin-top:-113px;margin-left:71px">
											<p>
												Seto Academy Pvt.Ltd.</br>
												Nepal<br>
												Kathmandu<br>
												Putalisadak<br>
												+977 01 4241228<br>
												<a href="mailto:">info@seto.edu.np</a>
											</p>
										</article>
									</div>
									<figure style="margin-left:-30px; margin-top:20px;padding-bottom:10px"><img src="images/map.png"></img alt="map"></figure>
								</div>
							</div>
						</article>
						<article class="col2 pad_left1">
							<div class="box1_out">
								<div class="box1">
									<h2>Contact Form</h2>
									<div class ="msg"><?php if(isset($success_msg)) {echo $success_msg; } ?></div>
										<form id="ContactForm" action="" method="post">
										
											<div class="wrapper pad_bot1">
												<div class="wrapper">
													Your Name:<div class="bg"><input type="text" name="name" class="input" placeholder="Enter your full name" required/></div><br />
												</div>
												<div class="wrapper">
													Your E-mail:<div class="bg"><input type="email" name="email" class="input" placeholder="youremail@domain.com" required/></div><br />
												</div>
												<div class="wrapper" style="height:180px;padding-bottom:10px">
													Your Message: <div class="bg"><div class="textarea"><textarea name="message" cols="1" rows="1" placeholder="Enter your message here" required/></textarea></div></div><br />
												</div>
												<div class="wrapper">
													<input  style="float:right" class="button green" type="reset" value="Clear" >
													<input style="float:right"  class="button green" type="submit" value="Send"/>
												</div>
											</div>
										</form>
								</div>
							</div>
							<div class="box1_bot"><div class="box1_bot_left"><div class="box1_bot_right"></div></div></div>
						</article>
					</div>
					<div class="wrapper marg_top2">
						<div class="pad">
							
						</div>
					</div>
				</section>
				<!-- / content -->
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