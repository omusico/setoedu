<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php 
include_once('prerequisite.php');
include_once('include/dbconnect.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = stripslashes($_POST['username']);
		$pwd = stripcslashes($_POST['pwd']);
		$login_query = mysql_query("Select username, password from logins where username='$name'");
		$login_data = mysql_fetch_object($login_query);
		if ($login_data) {
			$uname = $login_data->username;
			$pass = $login_data->password;
			if ($uname == $name && $pass == $pwd) {
				session_start();
				$_SESSION['user']=$name;
				header("location: cms_main.php");
			}
		} else {
			$error="Please enter your valid Username or Password.";
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
			<!-- Navigation menu using menu.css -->
				
		<!-- End of Navigation menu -->
				
					<!--Wrapper below Navigation menu-->			
					<div class="wrapper">
					<!-- Seto Academy Logo-->
						<div class="logobg" style="margin-top:0px">
							<img  style="padding-bottom:25px;" src="images/logo.png" alt="">
						</div> 
						
					
			</header>
		<!-- / header -->
		</div>
	</div>
	
<div class="body2">
	<div class="main" >
<!-- content -->
		<section id="content">
			<div class="marg_top wrapper">
			<div style="margin:0% 35% 0% 35%">
				<div class ="errormsg"><?php if(isset($error)) {echo $error;$error=" "; } ?></div>
				<table class="noborder" height="250px"width="300px">
					<tr cellspacing="0">
						<td colspan="4" class="noborder" style="text-align:center"><h3>Administrative Login Panel</h3></td>
					</tr>
					<tr>
						<td class="noborder" colspan="4" style="height:7px;background:#219621"></td>
					</tr>
					<tr>
						<td class="noborder" colspan="4" style="height:7px;background:#64c564"></td>
					</tr>
					<form action="" method="post">
					<tr>
						<td class="noborder"></td>
						<td class="padding" style="padding-top:10px" width="200">UserName</td>
						<td class="padding" style="padding-top:10px" ><input type="text" name="username" required></input></td>
						<td class="noborder" ></td>
					</tr>
					<tr>
						<td class="noborder"></td>
						<td class="padding">Password</td>
						<td class="padding"><input type="password" name="pwd" required></input></td>
						<td class="noborder"></td>
					</tr>
					<tr>
						<td class="noborder" ></td>
						<td class="noborder" ></td>
						<td class="padding"><input type="submit" class="button green" name="login" value="Login"></input></td>
						<td class="noborder" ></td>
							
					</tr>
					</form>
					<tr>
						<td class="noborder" colspan="4" style="height:7px;background:#64c564"></td>
					</tr>
					<tr>
						<td  class="noborder" colspan="4" style="text-align:center">Copyright &copy; 2013. All Rights Reserved.</td>
					</tr>
				</table>
			</div>
			</div>
		</section>
<!-- / content -->
	</div>
</div>
<div class="main">

<!-- footer -->
	<footer>
		<div class="wrapper">
			
		</div>
	</footer>
<!-- / footer -->
</div>

<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>