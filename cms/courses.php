<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');
include_once('include/dbconnect.php');
	$n_query = mysql_query('Select id, name, code,credit,book,description,pathway from courses');
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
				<article style="width:960">
					<h3>Course Configuration</h2>
					
					<table>
						<tr>
							<th width="250px" align="left">Name</th>
							<th width="150px" align="left">Code</th>
							<th width="150px" align="left">Credits</th>
							<th width="250px" align="left">Books</th>
							<th width="450px" align="left">Description</th>
							<th width="450px" align="left">Pathway</th>
							<th width="200px" align="left">Action</th>
						</tr>
						<?php while ($n_data = mysql_fetch_object($n_query)) {
							echo '<tr>
							<td>'.$n_data->name.'</td>
							<td>'.$n_data->code.'</td>
							<td>'.$n_data->credit.'</td>
							<td>'.$n_data->book.'</td>
							<td>'.$n_data->description.'</td>
							<td>'.$n_data->pathway.'</td>
							<td><a href="edit_course.php?id='.$n_data->id.'">Edit</a> | <a href="view_course.php?id='.$n_data->id.'">Detail</a></td>
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