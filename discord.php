<?php 
	$_GET['user'];
	$link = $_GET['user'];
	$url = "https://mixer.com/api/v1/channels/" . $link;
	$content = file_get_contents($url);
	$json = json_decode($content, true);
	$discord = $json['user']['social']['discord'];
	echo $discord
?>