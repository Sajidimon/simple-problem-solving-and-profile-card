<?php

$num1 = 4;
$num2 = 5;
$num3 = 6;


//initial largest number;

$largest = $num1;


//find largest number by comparing them;

if ($num2 > $largest && $num2 > $num3) {
    echo "$num2 is the largest number";
} elseif ($num3 > $largest && $num3 > $num2) {
    echo "$num3 is the largest number";
} else {
    echo "$num1 is the largest number";
}