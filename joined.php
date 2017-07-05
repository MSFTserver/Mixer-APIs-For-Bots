<?php 
	date_default_timezone_set ('America/Los_Angeles');
	$timezone  = -5; //(GMT -5:00) EST (U.S. & Canada) 
	$getdate = gmdate("Y/m/j H:i:s", time() + 3600*($timezone+date("I")));
	$_GET['user'];
	$link = $_GET['user'];
	$url = "https://mixer.com/api/v1/channels/" . $link;
	if (!$content = @file_get_contents($url)) {
      $error = error_get_last();
      echo "no user found";
	} else {
	$json = json_decode($content, true);
	$joined = $json['createdAt'];
	$start_date = new DateTime($joined);
	$since_start = $start_date->diff(new DateTime($today));
	echo  $since_start->y.' years, ' , $since_start->m.' months, ' , $since_start->d.' days, ' ,'[', $since_start->days.' days total]';
	}
?>