<?php

function greaterFn($num) {
    // echo $num < 10 ? "is Less than 10" : ($num > 20 ? "is Greater than 20" : ($num > 30 ? "is Greater than 30" : "is between 10 and 20"));
    if ($num > 30) {
        echo "$num is greater than 30";
      } else if ($num > 20) {
        echo "$num is greater than 20";
      } else if ($num > 10) {
        echo "$num is greater than 10";
      }
}
greaterFn(50);
?>