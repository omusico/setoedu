<?php
$letter = './json/newsletter.json';
$errorMessage = false;
if(file_exists($letter) ){
	$getContent = file_get_contents($letter);
	$contentList = json_decode($getContent,true);
}
if( !empty($_POST['name']) && !empty($_POST['email']) ){
 	$email = strip_tags($_POST['email']);
 	$name = strip_tags($_POST['name']);		
 	$date = date('Y-m-d');
 	$contentList[] = array(
		'date' => $date,
		'name' => $name,
		'email' => $email
	);
	$newsText = json_encode($contentList);
	if(file_put_contents($letter, $newsText)) {
		$success_msg = 'You have been subscribed!';	
	}
}
?>

<h2>Newsletter</h2>
	<form id="newsletter-form" action="" method="post">
		<div>
			<div class="bg" style="margin-top:-5px"><input class="input" name = "name" type="text" placeholder="Enter your full name" required/></div>
			<div class="bg" style="margin-top:-8px"><input class="input" name = "email" type="email" placeholder="Enter your email address" required/></div>
		</div>
		<div class ="msg"><?php if(isset($success_msg)) {echo $sucess_msg; } ?></div>
		<input type="submit" class="button green" value="Submit"></input>
	</form>			
		
	