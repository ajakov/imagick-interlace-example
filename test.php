<?php

$im = new Imagick('png-interlaced.png');

echo "getImageInterlaceScheme: " . $im->getImageInterlaceScheme(); // returns 7
echo "\n";

echo "getInterlaceScheme: ". $im->getInterlaceScheme(); // returns 1
echo "\n";
