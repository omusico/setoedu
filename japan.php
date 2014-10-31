<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy for Japanese Lanaguage Studies </title>
<?php
	include_once('prerequisite.php');
	$jp_query = mysql_query('Select college_name from japan');
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
						include_once('include/jp-sidebar.php');
					?>
					<!---side menu bar--->
					<!--- Main Content of the Website--->
						<article class="col2 pad_left1">
							<div class="pad" style="line-height:25px">
								
								<h2>Colleges/Schools in Japan</h2>
								<ul>
								<?php 
								$sn = 1;
								while ($jp_data = mysql_fetch_object($jp_query)) {
								
								echo'
									<li>'.$sn. '. '.$jp_data->college_name.'</li>';
									$sn=$sn+1;
									}
								?>
								</p>
								<h2>About Japan</h2>
									<p >	<table>
											<tr>
												<td><b>Flag:&nbsp;</b></td>
												<td><figure><img src="images/japan_logo.jpg"></img></figure></td>
											</tr>
										</table>
										<b>Government: </b>Parliamentary with constitutional monarchy<br/>
										<b>Capital:</b> Tokyo<br/>
										<b>National language:</b> Japanese</br>
										<b>National Scripts:</b> Kanji, Hiragana, Katakana</br>
										<b>Ethnic Groups:</b> 98.5% Japanese, 0.5% Korean, .04% Chinese, 0.6% others</br>
										<b>Religions:</b> Shinto and Buddhist 84%, Other 16% (including Christian 0.7%)</br>
										
										<a href="japanfact.php">Read More</a>
									</p>
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