<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');
include_once('include/dbconnect.php');
$id = $_GET['id'];
$a_detail_query = mysql_query('Select album_name from albums where album_id='.$id);
?>
<link href="css/uploadcss/style.css" type="text/css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Boogaloo' rel='stylesheet' type='text/css'>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>-->
<script type="text/javascript" src="js/multiupload.js"></script>
<script type="text/javascript">
//var a_id = "<?php echo $id; ?>";
var config = {
	support : "image/jpg,image/png,image/bmp,image/jpeg,image/gif",		// Valid file formats
	form: "demoFiler",					// Form ID
	dragArea: "dragAndDropFiles",		// Upload Area ID
	uploadUrl: "upload.php"    // Server side upload url
}
$(document).ready(function(){
	initMultiUploader(config);
});
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
				<article style="width:800px">
					
					<fieldset>
					<legend><b>Upload</b></legend>
					<table class="noborder">
						<tr>
							<th class="nobg" width="100px"></th>
							<th class="nobg" width="600px"></th>
							
						</tr>
						<?php 
							while ($a_detail_data = mysql_fetch_object($a_detail_query)) {
								echo '<tr>
							<td class="noborder">Album Name : </td>
							<td class="noborder">'.$a_detail_data->album_name.'</td>
						</tr>'; }
						?>
						<tr>
							<td class="noborder">Upload photo:</td>
							<td class="noborder">
								<div id="dragAndDropFiles" class="uploadArea">
									<h1>Drop Images Here</h1>
								</div>
								<form name="demoFiler" id="demoFiler" enctype="multipart/form-data">
								<input type="file" name="multiUpload" id="multiUpload" multiple />
								<input type="submit" name="submitHandler" id="submitHandler" value="Upload" class="buttonUpload" />
								</form>
								<div class="progressBar">
									<div class="status"></div>
								</div>
							</td>
						</tr>
						
					</table>
					</fieldset>
					
					<br/>
					<div style="display:block"><a href="gallery.php">Back to Photo Gallery</a></div>	
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