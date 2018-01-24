<?php
$youtube = 'https://www.youtube.com/user/';
$channel = 'pewdiepie';
$youtubechannel = "$youtube$channel";
$t = file_get_contents($youtubechannel);
$pattern = '/yt-uix-tooltip" title="(.*)" tabindex/';
preg_match($pattern, $t, $matches, PREG_OFFSET_CAPTURE);
$fp = fopen('subscribers.txt', 'w');
fwrite($fp, $matches[1][0]);
fclose($fp);
?>
