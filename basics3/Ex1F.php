<?php
$e1 = readline("Enter The first agjoining "); 
$e2 = readline("Enter The second agjoining ");
$di = readline("Enter The first diametre ");

if ($e1 == $e2 && $di**2== $e1**2 + $e2**2 ){
    echo "It's Rectangle";
}
elseif ($e1 == $e2 && $e1 == sqrt(($di**2)/2)){
    echo "is a rhombus ";
}
else {
    echo "is neither a rhombus nor a rectangle";
}
?>