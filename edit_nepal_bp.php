<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/dbconnect.php');
$id = $_GET['id'];
$n_query = mysql_query('Select * from nepal where id='.$id);

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$c_name=stripslashes($_POST['company']);
	$address=stripslashes($_POST['address']);
	$phone=stripslashes($_POST['phone']);
	$email=stripslashes($_POST['email']);
	$website=stripslashes($_POST['website']);
	$np_query = mysql_query("Update nepal set company_name = '$c_name', address='$address', phone='$phone', email='$email', webiste='$website' where id=$id") or die(mysql_error());
	header("location: business.php");
}
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
				<article style="width:600px">
					<h3>Business Partner Configuration</h2>
					<form action="" method="post" enctype="multipart/form-data">
					<fieldset>
					<legend><b>Business Partner of Nepal</b></legend>
					<table class="noborder">
						<tr>
							<th class="nobg" width="100px"></th>
							<th class="nobg" width="200px"></th>
							
						</tr>
						<?php $n_data = mysql_fetch_object($n_query); 
						echo '<tr>
							<td class="noborder">Company Name</td>
							<td class="noborder"><input type="text" name="company" value="'.$n_data->company_name.'" placeholder="Enter company name" style="width:300px" required></input></td>
						</tr>
						<tr>
							<td class="noborder">Address</td>
							<td class="noborder"><input type="text" name="address" value="'.$n_data->address.'" placeholder="Enter address" style="width:300px" required></input></td>
						</tr>
						<tr>
							<td class="noborder">Phone</td>
							<td class="noborder"><input type="text" name="phone" value="'.$n_data->phone.'" placeholder="Enter phone number" style="width:300px" required></input></td>
						</tr>
						<tr>
							<td class="noborder">Email</td>
							<td class="noborder"><input type="text" name="email" value="'.$n_data->email.'" placeholder="Enter email address" style="width:300px"></input></td>
						</tr>
						<tr>
							<td class="noborder">Website</td>
							<td class="noborder"><input type="text" name="website" value="'.$n_data->webiste.'" placeholder="Enter website name" style="width:300px"></input><br/><span style="color:red; font-size:12px">Website Format: www.websitename.com</span></td>
						</tr>';
						?>
						<tr>
							<td class="noborder"></td>
							<td class="noborder" style="padding-top:5px"><input onclick="window.confirm('Are you sure, you want to update business partner?')" class="button green" type="submit" value="Update"></input></td>
						</tr>
					</table>
					</fieldset>
					</form>
					<br/>
					<div style="display:block"><a href="business.php">Back to Business Partner</a></div>	
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