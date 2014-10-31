<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');
include_once('include/dbconnect.php');
$a_query = mysql_query('Select album_name, album_id from albums where album_name !="testimonial"');
?>
<script type="text/javascript">
function confirmDelete() {
	window.confirm('Are you sure, you want to delete this Album?');
}
</script>

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
					<h3>Photo Gallery</h3>
					<div style="display:block"><a href="create_album.php">Create New Album</a></div><br/>
					<table>
						<tr>
							<th width="250px" align="left">Photo</th>
							<th width="350px" align="left">Album Name</th>
							<th width="200px" align="left">Action</th>
						</tr>
						<?php while ($a_data = mysql_fetch_object($a_query)) {
											$a_id = $a_data->album_id;
											$p_query = mysql_query('Select path from photos where album_id ='.$a_id.' limit 1');
											$p_data = mysql_fetch_object($p_query);
											if ($p_data->path != null) {
												$path = '<img src="../'.$p_data->path.'" width="280" height="190"/>';
											} else {
												$path = "No photo added yet in the album";
											}
						echo '<tr>
							<td>'.$path.'</td>
							<td>'.$a_data->album_name.' </td>
							<td><a href="view_album.php?id='.$a_id.'">View All</a> | <a href="delete_album.php?id='.$a_id.'" onclick="confirmDelete()" >Delete Album</a></td>
						</tr>';
					}
						?>
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