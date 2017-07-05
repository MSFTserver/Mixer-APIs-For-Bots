<?php 
	$_GET['user'];
	$link = $_GET['user'];
	$url1 = "https://mixer.com/api/v1/channels/" . $link;
	$content1 = file_get_contents($url1);
	$json1 = json_decode($content1, true);
	$id = $json1['id'];
	$url2 = "https://mixer.com/api/v1/channels/$id/hosters";
	$content2 = file_get_contents($url2);
	$json2 = json_decode($content2, true);
	$hosters = count($json2);
	echo $hosters
?>