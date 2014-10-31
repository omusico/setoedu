<?php
	include_once('dbconnect.php');
	$t_query = mysql_query('Select user_id, user_name, user_msg, photo_path from testimonials');
?>
<a href="#"><h2>Testimonials</h2></a>
<div class="vscroll">
	<ul>
		<?php while ($t_data = mysql_fetch_object($t_query)) {
			$msg = strip_tags($t_data->user_msg);
			if (strlen($msg) > 45) {
				$stringCut = substr($msg, 0, 45);
			    $msg = substr($stringCut, 0, strrpos($stringCut, ' ')); 
			}
			echo '<li> <div class="wrapper pad_bot1">
							<figure><img src="'.$t_data->photo_path.'" alt="" class="left marg_right1"></figure>
							<span class="color1">'.$t_data->user_name .'</span><br>'.
							$msg.' <a href="testimonial_detail.php">More</a>
						</div>
				</li>';
			}
		?>
	</ul>					
</div>