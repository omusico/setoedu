<?php 
	include_once('dbconnect.php');
	$n_query = mysql_query('Select news_id, title from newsupdates order by date desc');

?>
<div style="height:42px;margin-top:65px;clear:both">
	<span style="font-size:20px;color:#219621">News Updates:</span>
		<ul id="ticker01">
			<?php while ($n_data = mysql_fetch_object($n_query)) {
				echo '<li><a href="newsdetail.php?id='.$n_data->news_id.'">'.$n_data->title.'</a></li>';
			} ?>
		</ul>
</div>