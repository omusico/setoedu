<?php
	include_once('prerequisite.php');
		session_start();
		$user_check=$_SESSION['login_user'];

		$ses_sql=mysql_query("select std_id from students where std_id='$user_check' ");

		$row=mysql_fetch_array($ses_sql);
		
		if(empty($row))
		{
			header("Location:elibrary-login.php");
		}
	$elibrary_query = mysql_query('Select * from elibrarys');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy for Japanese Lanaguage Studies </title>

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
						include_once('include/elink-sidebar.php');
					?>
					<!---side menu bar--->
					<!--- Main Content of the Website--->
						<article class="col2 pad_left1">
							<div class="pad">
								<h2>Welcome to the e-library Collection</h2>
									<ul class="list1">
										<?php
											while ($data = mysql_fetch_object($elibrary_query)) {
												echo '<li><a href="'.$data->lib_src.'" target="_blank">'.$data->lib_desc.'</a></li>';
											}
										?>							
									</ul>
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