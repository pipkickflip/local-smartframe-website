<?php
$dir = '../slideshow/images';
$files = scandir($dir);
$x = count($files);
$y = $x - 2;
echo 'There are currently ' . $y . ' images in the slideshow!'; 
?>