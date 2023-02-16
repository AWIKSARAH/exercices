<?php
function isArmstrong($number) {
    $num = (string)$number;
    $length = strlen($num);
    $sum = 0;
  
    for ($i = 0; $i < $length; $i++) {
      $sum += pow((int)$num[$i], $length);
    }
  
    if ($number === $sum) {
       echo "true";
    } else {
      echo "false";
    }
  }
    isArmstrong(153) ;
?>
