<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy for Japanese Lanaguage Studies </title>
<?php
	include_once('prerequisite.php');
	$np_query = mysql_query('Select company_name,address,phone,email,webiste from nepal');
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
				<!---content--->
				<section id="content">
					<div class="wrapper marg_top2">
					<!---side menu bar--->
					<?php
						include_once('include/sidebar.php');
					?>
					<!---side menu bar--->
					<!--- Main Content of the Website--->
						<article class="col2 pad_left1">
							<div class="pad">
								<h2 class="start">Our Business Partners in Nepal</h2>
								<?php
								while ($np_data = mysql_fetch_object($np_query)) {
								echo'
									<p><b>'.$np_data->company_name.',</b><br/>
										  '.$np_data->address.', <br/>
										  Phone: '.$np_data->phone.'<br/>
										  Email: <a href="mailto:">'.$np_data->email.'</a> <br/>
										  Website: <a href="http://'.$np_data->webiste.'" target="_blank">'.$np_data->webiste.'</a><br/><br/></p> ';
										}
									?>
							</div>
						</article>
					<!---End of Main Content--->
					</div>
				</section>
				<!---Content--->
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