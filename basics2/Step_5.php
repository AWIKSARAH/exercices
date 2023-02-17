<?php 
$digits = readline("Enter your Dig ");
function readDigit ($digits){
    switch ($digits) {
        case 1:
            echo "One";
            break;
            case 2:
                echo "Two";
                break;
             case 3:
                 echo "Three";
                break;
            case 4:
                    echo "Four";
                    break;
            case 5:
                echo "Five";
                break;
            case 6:
                echo "Six";
                break;
                case 7 : echo "seven";
                break;
                case 8 : echo "eight";
                break;
                case 9 : echo "nine";
                break;
                case 10 : echo "ten";
                break;

        default:
            break;
    }
}

readDigit($digits);
?>