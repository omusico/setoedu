<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');
include_once('include/dbconnect.php');
$id = $_GET['id'];
$n_query = mysql_query('Select id, name, code,credit,book,description,pathway from courses where id='.$id);

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=stripslashes($_POST['name']);
	$code=stripslashes($_POST['code']);
	$credit=stripslashes($_POST['credit']);
	$book=stripslashes($_POST['book']);
	$desc=$_POST['description'];
	$pahtway=$_POST['pathway'];
	
	$news_query = mysql_query("Update courses set name = '$name',code = '$code', credit = '$credit',book = '$book',description = '$desc',pathway = '$pathway' where id=$id") or die(mysql_error());
	header("location: courses.php");
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
				<article style="width:960px">
					<h3>Course Configuration</h2>
					<form action="" method="post" enctype="multipart/form-data">
					<fieldset>
					<legend><b>Update Course</b></legend>
					<table class="noborder">
						<tr>
							<th class="nobg" width="100px"></th>
							<th class="nobg" width="300px"></th>
							
						</tr>
						<?php $n_data = mysql_fetch_object($n_query); 
						echo '<tr>
							<td class="noborder">Name</td>
							<td class="noborder"><input type="text" name="name" value="'.$n_data->name.'" placeholder="Enter course Name" style="width:400px" required></input></td>
						</tr>
						<tr>
							<td class="noborder">Code</td>
							<td class="noborder"><input type="text" name="code" value="'.$n_data->code.'" placeholder="Enter course Code" style="width:400px" required></input></td>
							
						</tr>
						<tr>
							<td class="noborder">Credit</td>
							<td class="noborder"><input type="text" name="credit" value="'.$n_data->credit.'" placeholder="Enter course Credit" style="width:400px" required></input></td>
						</tr>
						<tr>
							<td class="noborder">Books</td>
							<td class="noborder"><textarea name="book" rows="5" cols="90" placeholder="Enter name of course books separated by comma" required>'.$n_data->book.'</textarea></td>
						</tr>
						<tr>
							<td class="noborder">Description</td>
							<td class="noborder"><textarea name="description" rows="5" cols="90" placeholder="Enter Course Description" required>'.$n_data->description.'</textarea></td>
						</tr>
						<tr>
							<td class="noborder">Pathway</td>
							<td class="noborder"><textarea name="pathway" rows="5" cols="90" placeholder="Enter Course pathway">'.$n_data->pathway.'</textarea></td>
						</tr>
						';
						?>
						<tr>
							<td class="noborder"></td>
							<td class="noborder" style="padding-top:5px"><input onclick="window.confirm('Are you sure, you want to update Course?')" class="button green" type="submit" value="Update"></input></td>
						</tr>
					</table>
					</fieldset>
					</form>
					<br/>
					<div style="display:block"><a href="courses.php">Back to Course</a></div>	
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