<?php 
	$_GET['caster'];
	$link = $_GET['caster'];
	$url1 = "https://mixer.com/api/v1/channels/" . $link;
	$content1 = file_get_contents($url1);
	$json1 = json_decode($content1, true);
	$id = $json1['id'];
	$url2 = "https://mixer.com/api/v1/channels/$id/recordings?order=createdAt:desc";
	$content2 = file_get_contents($url2);
	$json2 = json_decode($content2, true);
	$lastvod = $json2[0][id];
	echo "beam.pro/$link?vod=$lastvod"
?>