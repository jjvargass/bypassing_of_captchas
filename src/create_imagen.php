<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$a = gd_info();
echo '<pre>' . print_r($a,1) . '</pre>';

// // Create the size of image or blank image
// $image = imagecreate(500, 300);
//
// // Set the background color of image
// $background_color = imagecolorallocate($image, 0, 153, 0);
//
// // Set the text color of image
// $text_color = imagecolorallocate($image, 255, 255, 255);
//
// // Function to create image which contains string.
// imagestring($image, 5, 180, 100, "GeeksforGeeks", $text_color);
// imagestring($image, 3, 160, 120, "A computer science portal", $text_color);
//
// header("Content-Type: image/png");
//
// imagepng($image);
// imagedestroy($image);

?>
