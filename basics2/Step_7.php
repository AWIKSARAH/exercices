<?php 
// I'm confuse so i do 2 ways
// $input = readline("Enter a string: ");
// $string = str_replace("Python", " PHP", $input);
// $string = str_replace("PHP", "  PHP", $string);

// echo "New: \n" . $string;

///////////////////////////
$input = readline("Enter a string: ");
if (strpos($input, "PHP")) {
    $output = str_ireplace("PHP", "Python", $input);
    // $output = str_ireplace("Python", "PHP", $output);
} else {
    $output = str_ireplace("Python", "PHP", $input);
}
echo "After: " . $output;




?>
