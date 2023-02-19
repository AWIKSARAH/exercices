<?php
person(
    readline("'name : \n'"),readline("'Occupation : \n'"),readline("' Age : \n'"),readline("'Country : \n'")
);


function person ($name,$occupation,$age,$country)
{
    $personal_details=array("name" => $name, "occupation" => $occupation, "age" => $age, "country" => $country);
    foreach ( $personal_details as $key => $value )
    {
    echo "$key=$value\n";
    }
    

}

?>