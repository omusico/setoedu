<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy of Japanese Language</title>
<meta charset="utf-8">
<?php include_once('prerequisite.php');
include_once('include/check_session.php');

$letter = '../json/newsletter.json';
if(file_exists($letter) ){
	$getContent = file_get_contents($letter);
	$contentList = json_decode($getContent,true);
} else {
	echo 'File not found';
}
if( !empty($contentList) ){
	$contentList = array_reverse($contentList, true);
	//$content = rsort($contentList);
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
				<article class="awidth">
					<h3>Newsletter Configuration</h2>
					<table>
						<tr>
							<th width="150px" align="left">Date</th>
							<th width="150px" align="left">Name</th>
							<th width="250px" align="left">E-mail Address</th>
							<th width="150px" align="left">Action</th>
						</tr>
						<?php foreach( $contentList as $key=>$value){
							echo '<tr>
									<td>'.$contentList[$key]['date'].'</td>
									<td>'.$contentList[$key]['name'].'</td>
									<td>'.$contentList[$key]['email'].'</td>
									<td><a href="delete_newsletter.php?id='.$key.'">Delete</a></td>
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