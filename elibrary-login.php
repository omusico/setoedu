
<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy for Japanese Lanaguage Studies </title>
<?php
	include_once('prerequisite.php');
	//session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
// username and password sent from Form
		$userId=stripslashes($_POST['userId']);
		

		$sql="SELECT std_id FROM students WHERE std_id='$userId'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		//$active=$row['active'];
		$count=mysql_num_rows($result);
		

		// If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1)
		{
			//session_register("userId");
			session_start();
			$_SESSION['login_user']=$userId;
			
			header("location: e-links.php");
		}
		else
		{
			$error="Please enter your valid Student login ID.";
		}
	}
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
						include_once('include/e-sidebar.php');
					?>
					<!---side menu bar--->
					<!--- Main Content of the Website--->
						<article class="col2 pad_left1">
							<div class="pad">
								<h2>e-Library</h2>
								<p>Our students can use the online resources for Japanese language learning and vivid information on Japan, Japanese people, culture, studies, and scholarship in Japan. Please, use the <b>SEAC ID No.</b> given to you for the access.  </p>
								
								<table border="1" cellpadding="5">
									<tr>
										<td colspan="3"><h2>e-Library Login</h2></td>
										<td></td>
									</tr>
									
																
									
									<form action="" method="POST">
									<tr>
										<td><strong>SEAC ID No:&nbsp;&nbsp;</strong></td>
										<td><div class="bg" style="margin-top:-5px"><input name="userId" class="input" type="text" value="Enter Your SEAC ID " onblur="if(this.value=='') this.value='Enter Your SEAC ID '" onFocus="if(this.value =='Enter Your SEAC ID ' ) this.value=''" /></div></td>
											<td><div class ="errormsg"><?php if(isset($error)) {echo $error;$error=" "; } ?></div></td>
									</tr>
									<tr>
										<td></td>
										<td colspan="2"><input type="submit" class="button green" value="Enter"></input></td>
										
									</tr>
									</form>
								</table> 
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