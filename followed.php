<?php 
	date_default_timezone_set ('America/Los_Angeles');
	$timezone  = -5; //(GMT -5:00) EST (U.S. & Canada) 
	$getdate = gmdate("Y/m/j H:i:s", time() + 3600*($timezone+date("I")));
	$_GET['caster'];
	$_GET['user'];
	$link = $_GET['caster'];
	$link2 = $_GET['user'];
	$url1 = "https://mixer.com/api/v1/channels/" . $link;
	$content1 = file_get_contents($url1);
	$json1 = json_decode($content1, true);
	$id = $json1['id'];
	$url2 = "https://mixer.com/api/v1/channels/$id/follow?where=username:eq:$link2";
	$content2 = file_get_contents($url2);
	$json2 = json_decode($content2, true);
	$follow = $json2[0]['followed']['createdAt'];
	$start_date = new DateTime($follow);
	$since_start = $start_date->diff(new DateTime($today));
	echo  $since_start->y.' years, ' , $since_start->m.' months, ' , $since_start->d.' days, ' ,'[', $since_start->days.' days total]';
?>