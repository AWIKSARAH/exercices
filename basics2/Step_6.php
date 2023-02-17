<?php
$input = readline(" Enter your number: ");
echo $input[0];
$res = 0;
//  var_dump($input);
for ($i=0; $i <strlen($input) ; $i++) { 
    $res = intval($input[$i]) + $res;
//  var_dump($input[1]);

}
echo $res;
?>