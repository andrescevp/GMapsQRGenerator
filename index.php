<?php

require 'lib/autoloader.php';


//assing latitude - longitude
$latitude = "47.738074";
$longitude = "8.969400";

//assing images path and image name
$qrpath = "tmp/";  
$qrname = "test.png";

//make the link
$mapslink = PHPGMapsLinker\Linker::makeLink($latitude, $longitude);

//make QR code
QRcode::png($mapslink, $qrpath.$qrname, 'L', 4, 2);

//output sample
echo "<a href=\"".$mapslink."\">Go to maps</a><br>";
echo "<img src=\"".$qrpath.$qrname."\" />";





