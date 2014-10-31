<?php
	$article_query = mysql_query('Select * from articles limit 4');
?>
<article class="col1">
	<div class="box2">
		<div class="pad">
				
				
				<h2>Articles</h2>
				<p>Follow the article links below about Japan:</p>
					<ul class="list1">
						<?php
							while ($data = mysql_fetch_object($article_query)) {
					  			echo '<li><a href="'.$data->content_src.'" target="_blank">'.$data->article_name.'</a></li>';
							}
						?>							
					</ul>
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
				
				
				
				
				
				
		</div>
	</div>
</article>