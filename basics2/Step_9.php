<?php


// function is_Power_of_two($n)
// {
//    return  $x = $n**(1/2);
// }

// print_r(is_Power_of_two(4));


function is_Power_of_two($n)
{
echo ($n & ($n-1)) == 0 ? "{$n} is Power of 2" : "{$n} is not power of 2";

}

is_Power_of_two(readline("Enter a Number"));
?>