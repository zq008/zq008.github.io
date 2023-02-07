<?php
date_default_timezone_set("Asia/Shanghai");
$channel = empty($_GET['id']) ? "cctv16hd4k/15000000" : trim($_GET['id']);
$array = explode("/", $channel);
$stream = "http://[2409:8c20:9c71:120::34]/tencent-upcloud-live.bestvcdn.com.cn/live/program/live/{$array[0]}/{$array[1]}/";
$timestamp = substr(time(), 0, 9) - 7;
$current = "#EXTM3U" . "\r\n";
$current .= "#EXT-X-VERSION:3" . "\r\n";
$current .= "#EXT-X-TARGETDURATION:10" . "\r\n";
$current .= "#EXT-X-MEDIA-SEQUENCE:{$timestamp}" . "\r\n";
for ($i = 0; $i < 3; $i++) {
    $timematch = $timestamp . '0';
    $timefirst = date('YmdH', $timematch);
    $current .= "#EXTINF:8," . "\r\n";
    $current .= $stream . $timefirst . "/" . $timestamp . ".ts" . "\r\n";
    $timestamp = $timestamp + 1;
}
header("Content-Disposition: attachment; filename=playlist.m3u8");
echo $current;
?>
