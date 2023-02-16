<?php  
error_reporting(E_ALL);
ini_set('display_errors', 1);

function calculateArea($height, $width) {
    
      $area = $height * $width;
      echo "Area is " . $area;
    
  }
    calculateArea(5, 3);
  
?>
