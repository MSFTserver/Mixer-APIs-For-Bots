<?php 
	$url = "https://mixer.com/api/v1/channels?where=online:eq:1,suspended:eq:0&limit=5&order=featured:desc,interactive:desc,viewersCurrent:desc,viewersTotal:desc&fields=token";
	$content = file_get_contents($url);
	$json = json_decode($content, true);
	$first = $json[0]['token'];
	$second = $json[1]['token'];
	$third = $json[2]['token'];
	$fourth = $json[3]['token'];
	$fith = $json[4]['token'];
	echo "Top 5 Featured Streamers: $first, $second, $third, $fourth, $fith";
?>