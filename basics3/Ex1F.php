<?php
function sum_Digit($inp)
{
   
    $num = 0;
    
    for ($i = 0; $i < strlen($inp); $i++) { 
        $num = intval($inp[$i]) + $num;
    }
    
    echo "The sum of the digits in {$inp} is {$num}.\n";
 }

 sum_Digit(readline("Enter a number \n"));

?>
