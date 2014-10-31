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
for ($i = 0, $len = count($eventList); $i < $len; ++$i) {
   	if (($eventList[$i]['title'] == $_GET['title']) && isset($_POST['title']) && isset($_POST['desc']) && isset($_POST['date'])) {
   		$description = strip_tags($_POST['desc']);
	 	$event = strip_tags($_POST['title']);
		$date = strtotime($_POST['date']).'000';
	  	$eventList[$i]['date'] = $date;
	  	$eventList[$i]['type'] = 'event';
	  	$eventList[$i]['title'] = $event;
	  	$eventList[$i]['description'] = $description;
	  	$eventText = json_encode($eventList);
		file_put_contents($eventFile, $eventText);
		$msg = 'Event edited sucessfully!';
   	}
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
					<legend><b>Edit Event</b></legend>
					<div id = 'msg'>
						<?php if(isset($msg)) { echo $msg; } ?>
					</div>
					<table class="noborder">
						<tr>
							<th class="nobg" width="100px"></th>
							<th class="nobg" width="200px"></th>
							
						</tr>
						<?php foreach( $eventList as $eventItem){
							if ($eventItem['title'] == $_GET['title']) {
								$date = date('Y-m-d',$eventItem['date']/1000);
								echo '<tr>
										<td class="noborder"> Date</td>
										<td class="noborder"><input type="text" name="date" value="'.$date.'" placeholder="'.$date.'" required></input></td>
									</tr>
									<tr>
										<td class="noborder">Title</td>
										<td class="noborder"><input type="text" name="title" value="'.$eventItem['title'].'" placeholder="'.$eventItem['title'].'" required></input></td>
									</tr>
									<tr>
										<td class="noborder">Description</td>
										<td class="noborder"><textarea name="desc" rows="4" cols="40" placeholder="'.$eventItem['description'].'" required>'.$eventItem['description'].'</textarea></td>
									</tr>';
							}
						}
						?>
						<tr>
							<td class="noborder"></td>
							<td class="noborder" style="padding-top:5px"><input class="button green" onclick="window.confirm('Are you sure, you want to update an Event?')" type="submit" value="Update"></input></td>
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