<?php
function hex2rgb($hex) {
    // Copied
   $hex = str_replace("#", "", $hex);

   switch (strlen($hex)) {
       case 1:
           $hex = $hex.$hex;
       case 2:
          $r = hexdec($hex);
          $g = hexdec($hex);
          $b = hexdec($hex);
           break;

       case 3:
          $r = hexdec(substr($hex,0,1).substr($hex,0,1));
          $g = hexdec(substr($hex,1,1).substr($hex,1,1));
          $b = hexdec(substr($hex,2,1).substr($hex,2,1));
           break;

       default:
          $r = hexdec(substr($hex,0,2));
          $g = hexdec(substr($hex,2,2));
          $b = hexdec(substr($hex,4,2));
           break;
   }

   $rgb = array($r, $g, $b);
   return implode(",", $rgb); 
}