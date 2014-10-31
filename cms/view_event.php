<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php'); 
include_once('include/check_session.php');

$eventFile = '../data/event.json'; /* path to event data file */
if( file_exists($eventFile) ){
	$eventText = file_get_contents($eventFile); /* get event from file */
	$eventList = json_decode($eventText,true); /* create array list from event */
} else {
	echo 'File not found';
}
if( !empty($eventList) ){
	$eventList = array_reverse($eventList,true); /* reverse array so latest comment is first */
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
		<!-- End of Navigation menu -->
				
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
				<article class="col2 pad_left1">
					<h3>Calendar Configuration</h2>
					<form action="" method="post">
					<fieldset>
					<legend><b>Event Detail</b></legend>
					<?php 
						foreach( $eventList as $eventItem ){
							if ($eventItem['title'] == $_GET['title']) {
								$date = date('Y-m-d',$eventItem['date']/1000);
								echo '<p>
									<b>Date</b><br/>'.$date.'<br/><br/>
									<b>Title</b><br/>'.$eventItem['title'].'<br/><br/>
									<b>Description</b><br/>'.$eventItem['description'].'
									</p>';
							}
						}
					?>
					</fieldset>
					</form>
					<br/>
					<div style="display:block"><a href="calendar.php">Back to Calendar</a></div>	
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