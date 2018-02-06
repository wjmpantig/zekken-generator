<?php 
require_once("functions.php");

$surname = $_GET['surname'];
$jp = $_GET['jpn'];
$width_inch = 6.25;
$height_inch= 10.415;
$dpi = 200;
if(is_null($jp) || is_null($surname)) {
	return ;
}
$width = $width_inch * $dpi;
$height = $height_inch * $dpi;

$background = hex2rgb('#01084d');

header("Content-Type: image/png");


$image = @imagecreatetruecolor($width, $height) or die("Cannot Initialize new GD image stream");
$bg_color = imagecolorallocate($image, $background[0], $background[1], $background[2]);
imagefill($image, 0, 0, $bg_color);
imagepng($image);
imagedestroy($image);



?>