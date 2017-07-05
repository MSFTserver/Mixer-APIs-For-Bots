<?php 
	$_GET['user'];
	$link = $_GET['user'];
	$url = "https://mixer.com/api/v1/channels/" . $link;
	$content = file_get_contents($url);
	$json = json_decode($content, true);
	$co = $json['costreamId'];
	$url2 = "https://mixer.com/api/v1/costreams/" . $co;
	$content2 = file_get_contents($url2);
	$json2 = json_decode($content2, true);
	$casters = $json2['channels'];
	if (empty($co)) {
		echo $link;
		echo ' is not co-streaming';
	}else{
		echo "User's in Co-stream: ";
		foreach ($casters as $key => $value) {
		echo "@";
		echo $value["token"] . ", ";
	}
	}
?>