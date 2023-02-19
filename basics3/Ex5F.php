<?php
$sentence = readline("Enter a Sentence");

$reversed = "";

for ($i = strlen($sentence) - 1; $i >= 0; $i--) {
    $reversed .= $sentence[$i];
}
echo $reversed; 
?>
