<?php

// Function which prints "Hello I am TheCodeholic"
function hello($name) {
    echo "Hello, I am $name <br>";
}

hello('TraversyMedia');
hello('TheCodeholic');
hello('TheLaravelDaily');
hello('TheNetNinja');
// Create sum of two functions
//function sum($a, $b) {
//    echo ($a + $b) . '<br>';
//}
//sum(5, 2);
//sum(3, 7);

//function sum($a, $b) {
//    return $a + $b . "<br>";
//}

//$sum =  sum(5, 2);
//echo $sum;
// Create function to sum all numbers using ...$nums
function sum(...$numbers) {
    /*$sum = 0;
    foreach($numbers as $num) $sum += $num;
    echo $sum;*/  //same as below

    return array_reduce($numbers, fn($n, $carry) => $n + $carry);
}

$sum = sum(1,2,3,4,5);
echo $sum;
// Arrow functions