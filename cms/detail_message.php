<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');
include_once('include/dbconnect.php');
$id = $_GET['id'];
$m_query = mysql_query('Select contact_id, name, email, message, date from contacts where contact_id ='.$id);
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
					<h3>Message Configuration</h2>
					<form action="" method="post">
					<fieldset>
					<legend><b>Message Detail</b></legend>
					<?php $m_data = mysql_fetch_object($m_query); 
						echo '<p>
							<b>Date</b><br/>'.$m_data->date.'<br/><br/>
							<b>Name</b><br/>'.$m_data->name.'<br/><br/>
							<b>E-mail</b><br/>'.$m_data->email.'<br/></br>
							<b>Message</b><br/>'.$m_data->message.'<br/>
						</p>
							<a href="delete_message.php?id='.$m_data->contact_id.'">Delete</a>';
					?> 
					</fieldset>
					</form>
					<br/>
					<div style="display:block"><a href="message.php">Back to Messages</a></div>	
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