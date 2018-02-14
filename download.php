<?php 
$dir = __DIR__.'/tmp';
$filename = $_GET['f'];
if(!is_null($filename) || empty($filename)){
	echo 'need filename param';
}
$path = $dir . '/' .$filename;
if(file_exists($path)){
	$im = imagecreatefrompng($path);

	header('Content-Type: image/png');

	imagepng($im);
	imagedestroy($im);
}else{
	echo "file not found..";
}
?>