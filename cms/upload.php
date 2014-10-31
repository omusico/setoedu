<?php
$id = $_GET['id'];
//echo $id;
if($_SERVER['REQUEST_METHOD'] == "POST"){
	/*if(move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$_FILES['file']['name'])){
		//$path = "uploads/".$_FILES['file']['name'];
		$gallery_query = mysql_query("insert into photos (path, album_id) values('image','4');") or die(mysql_error());
		echo($_POST['index']);
	}*/
	$pName = $_FILES["file"]["name"];
	$pTempName = $_FILES["file"]["tmp_name"];
    if (file_exists("uploads/" . $pName)) {
		$imgError = $pName . " already exists. ";
	} else {
		move_uploaded_file($pTempName, "uploads/" . $pName);
		$path = 'uploads/'.$pName;
		$gallery_query = mysql_query("insert into photos (path, album_id) values('image','4');") or die(mysql_error());		
	}
	exit;
}
?>