<?php
for ($row = 0; $row < 7; $row++) {

    for ($col = 0; $col < 7; $col++) {

        if ($row == 0 || $row == 6) {
            echo "*";
        } else {
            if ($col == (6 - $row)) {
                echo "*";
            } else {
                echo " ";
            }
        }
    }
    echo PHP_EOL;
}
?>
