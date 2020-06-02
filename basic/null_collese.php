<?php
$default_lat=23.90;
$default_lon=90.3;
$user_lat;
$lat= $user_lat ?? $default_lat;
// $lat_s=isset($user_lat) ? $user_lat : $default_lat;
echo $lat;
// echo $lat_s;