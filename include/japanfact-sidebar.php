<?php
	$article_query = mysql_query('Select * from articles limit 4');
?>
<article class="col1">
	<div class="box2">
		<div class="pad">
				
				<?php include_once('testimonial.php'); ?>
				<div style="padding-top:3px;padding-bottom:8px">
					<figure><a href="japanfact.php"><img alt="Facts about japan" src="images/japanfact.jpg"></img></a></figure>
				</div>
				<div style="padding-top:3px">
					<figure><a href="study.php"><img alt="study in japan" src="images/studyjapan.jpg"></img></a></figure>
				</div>
				<div style="padding-top:10px">
					<figure><a href="japaneseculture.php"><img alt="Japanese Culture" src="images/japanculture.jpg"></img></a></figure>
				</div>
				<h2>Weather</h2>
						<div id= 'selectcity'>
							Select City: 
							<select id="cities">
								
								<option value="Tokyo">Tokyo</option>
								<option value="Osaka">Osaka</option>
								<option value="Fukuoka">Fukuoka</option>
								<option value="Kathmandu">Kathmandu</option>
							</select>
						</div>
						<div id='city'></div>
				<h2>Articles</h2>
				<p>Follow the article links below about Japan:</p>
					<ul class="list1">
						<?php
							while ($data = mysql_fetch_object($article_query)) {
					  			echo '<li><a href="'.$data->content_src.'" target="_blank">'.$data->article_name.'</a></li>';
							}
						?>							
					</ul>
				
				
				
				
				
		</div>
	</div>
</article>