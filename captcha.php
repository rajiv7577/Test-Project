<?php
session_start();

header("Content-Type: image/png");

$width = 120;
$height = 40;

$image = imagecreate($width, $height);

$bg = imagecolorallocate($image, 255, 255, 255);
$text = imagecolorallocate($image, 0, 0, 0);

$captcha = rand(1000,9999);
$_SESSION['captcha'] = $captcha;

imagestring($image, 5, 35, 10, $captcha, $text);

imagepng($image);
imagedestroy($image);
?>