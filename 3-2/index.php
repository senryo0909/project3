<?php

$fruits = array("りんご" => 300, "みかん" => 150, "桃" => 3000);

function calcFruits($price, $fruitCounts){
    return $price * $fruitCounts;
}

foreach($fruits as $fruit => $price){
    echo "$fruit . は . $price円です";
}
?>