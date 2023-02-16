

<?php
// $grocery = ["Eggs", "Milk","Cheese", "WaterPack", "Tissues", "Watermelon"];

$grocery = array("Eggs", "Milk","Cheese", "WaterPack", "Tissues", "Watermelon");
echo "Hello Sir, do you have {$grocery[0]}, {$grocery[1]}, and {$grocery[2]}? Also if you sell fruits can I find a {$grocery[5]}?";


$grocery = array(
    'Eggs' => array('balade', 'mazere3'),
    'Milk' => array('Fresh', 'Taanayel'),
    'WaterPack' => array('Tanoureen', 'Reem')
);

echo "Hey Sir, Please I need 1 pack of {$grocery['Eggs'][0]} eggs and 3 {$grocery['WaterPack'][1]} WaterPack.";
?>

