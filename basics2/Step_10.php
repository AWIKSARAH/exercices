<?php 
function check_palindrome($string)
{

if ($string == strrev($string)) {
    return "1";
}
    return "0";

}


echo "Checking:".check_palindrome(readline("Enter your Word to check : \n"))
?>