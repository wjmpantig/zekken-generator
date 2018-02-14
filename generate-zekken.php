<?php 

$svg = $_POST['svg'];
$width = $_POST['width'];
$height = $_POST['height'];
if(is_null($svg) || empty($svg)){
	echo "no svg input";
	return false;
}

$svg = str_replace("fonts/", "../fonts/", $svg);
$dir = __DIR__.'/tmp';
$pngdir = __DIR__.'/png';
$temp_name = tempnam($dir,"svg");
$temp_out = basename($temp_name).'.png';
$temp  = fopen($temp_name,"w");
fwrite($temp, $svg);
fclose($temp);

$cmd = "svg2png $temp_name -o$temp_out -w$width -h$height";

$output = array();
$result = 0;
chdir($pngdir);
exec($cmd,$output,$result);
if($result == 0){
	echo $temp_out;
}else{
	echo "something failed";
	print_r($output);
	return false;
}

?>