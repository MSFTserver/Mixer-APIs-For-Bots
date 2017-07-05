<?php 
	$_GET['user'];
	$link = $_GET['user'];
	$url = "https://mixer.com/api/v1/channels/" . $link;
	$content = file_get_contents($url);
	$json = json_decode($content, true);
	$online = $json['online'];
	if (empty($online)) {
		echo $link;
		echo 'is not streaming';
	}else{
		echo $link;
		echo ' is live';
	}
?>