<!DOCTYPE html>
<html lang="en">
<head>
<title>Seto Academy for Japanese Lanaguage Studies </title>
<?php
	include_once('prerequisite.php');
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
						include_once('include/japan-sidebar.php');
					?>
					<!---side menu bar--->
					<!--- Main Content of the Website--->
						<article class="col2 pad_left1">
							<div class="pad" style="line-height:25px; text-align:justify">
								<h2 class="start">About Japan</h2>
									<p>	
									<figure style="float:right; padding:10px"><img src="images/japan.png"></img></figure>
									<table>
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
										<b>Population:</b> 127,368,088 (July 2012 est.)</br>
										<b>Population Growth Rate:</b> -0.077% (2012 est.), World Rank: 198th</br>
										<b>Birth Rate:</b> 8.39 births/1,000 population (2012 est.), World Rank: 217th</br>
										<b>GDP:</b> 4.34 Trillion (2008)</br>
										<b>Electric Power Generation:</b> Conventional thermal (coal, oil, natural gas) 60%, Nuclear 29%, Hydroelectric 9%, Renewable 2%<br/>
										<b>Industries:</b> Consumer electronics, motor vehicles, machine tools, steel, and nonferrous metals</br>
										<b>Exports:</b> Motor vehicles, semiconductors, and office machinery</br>
										<b>Agriculture:</b> Rice, sugar beets, vegetables, fruit, pork, fish</br>
										<b>Currency:</b> Yen</br>
										<b>Life Expectancy:</b> Average: 82, Male: 78.8, Female: 85.6<br/>
										<b>GDP per Capita:</b> $33,800<br/>
										<b>Literacy Rate:</b> 99%<br/>
										<b>Unemployment Rate:</b> 4%<br/>
										<b>Internet Users:</b> 87.5 million
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