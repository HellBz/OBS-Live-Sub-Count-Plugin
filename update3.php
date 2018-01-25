<?php
$JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?id=API_KEY&part=statistics");
$json_data = json_decode($JSON, true);
$fp = fopen('likes.txt', 'w');
fwrite($fp, $json_data['items'][0]['statistics']['likeCount']);
fclose($fp);
?>

