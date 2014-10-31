<?include_once ('include/dbconnect.php');?>
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
						<article>
							<!--list of site map data starts here-->						
							<h2 class="start">Site Map</h2>
								
									<table style="width:100%;	text-align:justify; padding:5px; solid #219621;" style="text-align:justify">
										<tr>
											<ul>
												<td style="width:33%; padding:5px; solid #219621;">
													<table>
														<tr>
															<td>
																<a href="index.php"  target=""><h2>Home</h2></a>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="introduction.php"  target="">Welcome To Seto Academy </a></li>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="message.php"  target="">Message From The Chairperson </a></li>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="welcome.php"  target="">瀬戸アカデミーへようこそ</a></li>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="Study.php"  target="">Study in Japan</a></li>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="japaneseculture.php"  target="">Learn about Japanese Culture</a></li>
															</td>
														</tr>
													</table>
												</td>
												<td style="width:33%; padding:5px; solid #219621;">
													<table>
														<tr>
															<td>
																<a href="aboutus.php"  target=""><h2>About Us</h2></a>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="aboutus.php"  target="">Vision </a></li>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="aboutus.php"  target="">Mission </a></li>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="aboutus.php"  target="">Values and Ethics </a></li>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="aboutus.php"  target="">Team, Support and Affiliation </a></li>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="aboutus.php"  target="">Management Team In Japan </a></li>
															</td>
														</tr>
													</table>
												</td>
												<td>
													<table>
														<tr>
															<td>
																<a href="services.php"  target=""><h2>Our Services</h2></a>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="services.php"  target="">Japanese Language Courses</a></li>
															</td>
														</tr>
														<tr>	
															<td>
																<li><a href="services.php"  target="">Japanese Test Preparation Courses</a></li>
															</td>
														</tr>
														<tr>	
															<td>
																<li><a href="services.php"  target="">Career Counseling For Study Abroad</a></li>
															</td>
														</tr>
														<tr>	
															<td>
																<li><a href="services.php"  target="">Placement In Schools/Colleges/Universities</a></li>
															</td>
														</tr>
														<tr>	
															<td>
																<li><a href="services.php"  target="">Scholarship Assistance</a></li>
															</td>
														</tr>
														<tr>	
															<td>
																<li><a href="services.php"  target="">Translation Work</a></li>
															</td>
														</tr>
														<tr>	
															<td>
																<li><a href="services.php"  target="">Documentation and Visa Application Services</a></li>
														</td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td style="width:33%; padding:5px; solid #219621;">
													<table>
														<tr>
															<td>
																<a href="courses.php"  target=""><h2>Courses</h2></a>
															</td>
														</tr>
														<tr>	
															<td>
																<li><a href="courses.php"  target="">Japansese Langage Courses </a></li>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="courses.php"  target="">Beginner's Japanese Language</a></li>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="courses.php"  target="">Intermediate Japanese Language</a></li>
															</td>
														</tr>
														<tr>
															<td>	
																<li><a href="courses.php"  target="">Upper Intermediate Japanese Language</a></li>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="courses.php"  target="">Advanced Japanese Course</a></li>
															</td>
														</tr>	
													</table>
												</td>
												<td style="width:33%; padding:5px; solid #219621;">
													<table>
														<tr>
															<td>
																<a href="japan.php"  target=""><h2>Our Business Partners</h2></a>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="japan.php"  target="">Business Partners in Japan</a></li>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="nepal.php"  target="">Business Partners in Nepal </a></li>
															</td>
														</tr>
													</table>
												</td>
												<td>
													<table>
														<tr>
															<td>
																<a href="index.php"  target=""><h2>Others</h2></a>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="aboutus.php"  target="">Testimonials</a></li>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="japanfact.php"  target="">Facts about Japan</a></li>
															</td>
														</tr>
														<tr>
															<td>
																<li><a href="elibrary-login.php"  target="">E-Library</a></li>
															</td>
														</tr>
														<tr>	
															<td>
																<li><a href="gallery.php"  target="">Gallery</a></li>
															</td>
														</tr>
														<tr>	
															<td>
																<li><a href="contact.php"  target="">Contact Us</a></li>
															</td>
														</tr>
												</table>
											</td>
										</tr>
									</ul>
								</table>
							
						<!-- Table ends here-->
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