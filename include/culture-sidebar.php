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
				<div style="padding-top:10px;padding-bottom:10px">
					<figure><a href="japaneseculture.php"><img alt="Japanese Culture" src="images/japanculture.jpg"></img></a></figure>
				</div>
				<div style="padding-bottom:10px">
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
				<div style="padding-bottom:10px">
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
					<div style="padding-bottom:10px">
				<?php include_once('newsletter.php'); ?>
				</div>
				<div style="padding-bottom:10px">
				<h5>瀬戸アカデミーへようこそ</h5>
				<p>>瀬戸アカデミーのホームページを訪問していただきありがとうございます。私たちの学校は、日本語や日本研究のための明確なビジョンを持って設立されました。学生が日本へ留学するために必要な日本語と日本文化を学べるよう様々なコースを用... <a href="welcome.php">Read More</a></p>
				</div>
				
				<h2>e-Library</h2>
				<figure><a href="elibrary-login.php"><img src="images/e-book.png" alt=""></a></figure>
				
				
				
		</div>
	</div>
</article>