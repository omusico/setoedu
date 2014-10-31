<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy for Japanese Lanaguage Studies </title>
<?php
	include_once('prerequisite.php');
	$c_query = mysql_query('Select id, name, code, credit, book, description, pathway from courses;');
?>
</head>
	<body id="page2">
		<div class="body3"></div>
		<div class="body1">
			<div class="main">
				<header>	
					<?php 
						include_once('include/header.php');
					?>
				</header>
			</div>
		</div>
		<div class="body2">
			<div class="main" >
				<!---content-->
				<section id="content">
					<div class="wrapper marg_top2">
					<!---side menu bar-->
					<?php
						include_once('include/courses-sidebar.php');
					?>
					<!---side menu bar-->
					<!--- Main Content of the Website-->
						<article class="col2 pad_left1">
							<div class="pad">
								<h2 class="start">Japanese Language Courses</h2>
								<?php while ($c_data = mysql_fetch_object($c_query)) {
								
								echo '<p>
									<table style="width:100%;	text-align:justify;	border: 1px solid #219621;" style="text-align:justify">
										<tr>
											<td style="width:20%;color: #219621;padding:5px; border: 1px solid #219621;">Course Name: </td>
											<td style="padding:5px; border: 1px solid #219621;"><b>'.$c_data->name.'</b></td>
										</tr>
										<tr>
											<td style="width:20%;color: #219621;padding:5px; border: 1px solid #219621;">Course Code: </td>
											<td style="padding:5px; border: 1px solid #219621;">'.$c_data->code.'</td>
										</tr>
										<tr>
											<td style="width:20%;color: #219621;padding:5px; border: 1px solid #219621;">Course Credit: </td>
											<td style="padding:5px; border: 1px solid #219621;">'.$c_data->credit.'</td>
										</tr>
										<tr>
											<td style="width:20%;color: #219621;padding:5px; border: 1px solid #219621;">Course Books:</td>
											<td style="padding:5px; border: 1px solid #219621;">'.$c_data->book.'</td>
										</tr>
										<tr>
											<td style="width:20%;color: #219621;padding:5px; border: 1px solid #219621;">Course Description: </td>
											<td style="padding:5px; border: 1px solid #219621;"><div class="more">'.$c_data->description.'</div></td>
											
										</tr>
										<tr>
											<td style="width:20%;color: #219621;padding:5px; border: 1px solid #219621;">Course Pathway: </td>
											<td style="padding:5px; border: 1px solid #219621;">'.$c_data->pathway.'</td>
										</tr>
									</table>
								</p><br/>';
							}
							?>
							</div>
						</article>
					<!---End of Main Content-->
					</div>
				</section>
				<!---Content-->
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