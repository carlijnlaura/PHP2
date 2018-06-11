<?php
/**
 * Created by PhpStorm.
 * User: Carlijn
 * Date: 06/06/2018
 * Time: 09:15
 */

function telop (){
    $a = 7;
    $b = 6;
    $c = $a + $b;
    echo $a. " + " .$b. " = " .$c;
}
telop();

echo "<br>";

function telopp ($a, $b){
    $c = $a + $b;
    echo $a. " + " .$b. " = " .$c;
}
telopp(4,5);

echo "<br>";

function teloppp ($a, $b){
    $c = $a + $b;
    return $a. " + " .$b. " = " .$c;
}
echo teloppp(8997,45776);