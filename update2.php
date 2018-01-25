<?php
$viewers = file_get_contents('https://www.youtube.com/live_stats?v=STREAM_ID');
$fp = fopen('views.txt', 'w');
fwrite($fp, $viewers);
fclose($fp);
?>

