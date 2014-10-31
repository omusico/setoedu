<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');
include_once('include/dbconnect.php');
	$p_query = mysql_query('Select * from nepal');
	$n_query = mysql_query('Select id, college_name from japan');
	
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
					<h2>Business Partners Configuration</h2>
					<h3>Business Partners From Japan</h3>
					<div style="display:block"><a href="create_japan_bp.php">Create</a></div><br/>
					<table>
						<tr>
							<th width="50px" align="left">Id</th>
							<th width="550px" align="left">College Name</th>
							<th width="100px" align="left">Action</th>
							
						</tr>
						<?php while ($n_data = mysql_fetch_object($n_query)) {
							echo '<tr>
							<td>'.$n_data->id.'</td>
							<td>'.$n_data->college_name.'</td>
							
							<td><a href="edit_japan_bp.php?id='.$n_data->id.'">Edit</a> | <a href="delete_japan_bp.php?id='.$n_data->id.'">Delete</a></td>
							</tr>';
						} ?>
						
					</table>
							
				</article>
				<article style="width:960px">
					
					<h3>Business Partners From Nepal</h3>
					<div style="display:block"><a href="create_nepal_bp.php">Create</a></div><br/>
					<table>
						<tr>
							<th width="250px" align="left">Company Name</th>
							<th width="250px" align="left">Address</th>
							<th width="150px" align="left">Phone Number</th>
							<th width="150px" align="left">Email</th>
							<th width="150px" align="left">Website</th>
							<th width="150px" align="left">Action</th>
							
						</tr>
						<?php while ($np_data = mysql_fetch_object($p_query)) {
							echo '<tr>
							<td>'.$np_data->company_name.'</td>
							<td>'.$np_data->address.'</td>
							<td>'.$np_data->phone.'</td>
							<td>'.$np_data->email.'</td>
							<td>'.$np_data->webiste.'</td>
							
							<td><a href="edit_nepal_bp.php?id='.$np_data->id.'">Edit</a> | <a href="delete_nepal_bp.php?id='.$np_data->id.'">Delete</a></td>
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