<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');
include_once('include/dbconnect.php');
$m_query = mysql_query('Select contact_id, name, email, message, date from contacts order by contact_id desc');
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
				<article class="awidth">
					<h3>Message Configuration</h2>
					<table>
						<tr>
							<th width="150px" align="left">Date</th>
							<th width="150px" align="left">Name</th>
							<th width="250px" align="left">E-mail Address</th>
							<th width="550px" align="left">Message</th>
							<th width="150px" align="left">Action</th>
						</tr>
						<?php while ($m_data = mysql_fetch_object($m_query)) {
							echo '<tr>
							<td>'.$m_data->date.'</td>
							<td>'.$m_data->name.'</td>
							<td>'.$m_data->email.'</td>
							<td>'.$m_data->message.'</td>
							<td><a href="detail_message.php?id='.$m_data->contact_id.'">Detail</a> | <a href="delete_message.php?id='.$m_data->contact_id.'">Delete</a></td>
							</tr>';
						} ?>
						
					</table>
							
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