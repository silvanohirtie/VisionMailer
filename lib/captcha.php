<?php
session_start();
$image = imagecreatetruecolor(120, 30);
$background = imagecolorallocate($image, 200, 200, 200);
imagefill($image, 0, 0, $background);
$linesColor = imagecolorallocate($image, 100, 100, 100);
for ($i=1; $i<=5; $i++) {
   imagesetthickness($image, rand(1,2));
   imageline($image, 0, rand(0,30), 120, rand(0,30), $linesColor);
}
$captcha = '';
$textColor = imagecolorallocate($image, 0, 0, 0);
for ($x = 15; $x <= 95; $x += 20) {
    $value = rand(0, 9);
    imagechar($image, rand(3, 5), $x, rand(2, 14), $value, $textColor);
    $captcha .= $value;
}
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
$_SESSION['captcha'] = $captcha;
