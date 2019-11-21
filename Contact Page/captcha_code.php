<?php
session_start();
$random_alpha = md5(rand()); //creating a random sequence
$captcha_code = substr($random_alpha, 0, 6); //taking a captcha code of length 5 from the random sequence
$_SESSION["captcha_code"] = $captcha_code;
$target_layer = imagecreatetruecolor(70,30); //blank image of width 70 and height 30
$captcha_background = imagecolorallocate($target_layer, 255, 160, 119); // sets background colour of image with r,g,b components 255, 160, and 119 respectively (if I'm doing this right, it should be a sort of peach colour)
imagefill($target_layer,0,0,$captcha_background); //flood fill the blank image with the peach background from the co-ordinates (0,0) i.e top left
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0); //sets captcha code text colour to black
imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color); //draws a string with the created captcha image with font size 5, from co-ordinates (5,5). The string to be written is the captcha code, and it is written in the colour we set (black)
header("Content-type: image/jpeg");
imagejpeg($target_layer);
?>