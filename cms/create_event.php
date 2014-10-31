<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php'); 
include_once('include/check_session.php');
	/* Code Example adapted from @sofasurfer.ch */
  	$eventFile = '../data/event.json'; 
  	if( file_exists($eventFile) ){
		$eventText = file_get_contents($eventFile);
		$eventList = json_decode($eventText,true);
	}
 	if( !empty($_POST['title']) && !empty($_POST['desc']) && !empty($_POST['date'])){
	  	$description = strip_tags($_POST['desc']);
	 	$event = strip_tags($_POST['title']);
		$date = strtotime($_POST['date']).'000';
	  	$eventList[] = array(
			'date' => $date,
			'type' => 'event',			
			'title' => $event,
			'description' => $description
		);
		$eventText = json_encode($eventList);
		file_put_contents($eventFile, $eventText);
		$msg = 'One event created sucessfully!';
	}
?>

</head>
	<body id="page1">
		<div class="body3"></div>
			<div class="body1">
				<div class="main">
		<!-- header -->
				<header>	
			<!-- Navigation menu using menu.css -->
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
					<legend><b>Create Event</b></legend>
					<div id = 'msg'>
						<?php if(isset($msg)) { echo $msg; } ?>
					</div>
					<table class="noborder">
						<tr>
							<th class="nobg" width="100px"></th>
							<th class="nobg" width="200px"></th>
							
						</tr>
						<tr>
							<td class="noborder"> Date</td>
							<td class="noborder"><input type="text" name="date" placeholder="Enter date" required></input><br/><span style="color:red; font-size:12px">Date Format: yyyy-mm-dd</span></td>
						</tr>
						<tr>
							<td class="noborder">Title</td>
							<td class="noborder"><input type="text" name="title"  placeholder="Enter Event Title" required></input></td>
						</tr>
						<tr>
							<td class="noborder">Description</td>
							<td class="noborder"><textarea name="desc" rows="4" cols="40" placeholder="Enter Event Description" required></textarea></td>
						</tr>
						<tr>
							<td class="noborder"></td>
							<td class="noborder" style="padding-top:5px"><input onclick="window.confirm('Are you sure, you want to create an Event?')" class="button green" type="submit" value="Create"></input></td>
						</tr>
					</table>
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