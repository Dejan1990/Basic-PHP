<?php

// What is a variable

// Variable types
/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/
// Declare variables
$name = "Zura";
$age = 28;
$isMale = true; // 3. Change into false
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
echo "Print the variables:" . "<br><br>";

echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print types of the variables
echo "Print types of the variables" . "<br><br>";

echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable
echo "Print the whole variable" . "<br><br>";
var_dump($name, $age, $isMale, $height, $salary);

// Change the value of the variable
$name = 2.45;

// Print type of the variable
echo "Print type of the variable" . "<br><br>";

echo $name . '<br>';
echo gettype($name) . '<br>';

// Variable checking functions
echo '<br>';
echo "Variable checking functions" . "<br><br>";

var_dump(is_double($name));
echo is_double($name);
var_dump(is_int($name));
echo is_int($name);
echo '<br>';

// Check if variable is defined
echo "Check if variable is defined" . "<br><br>";

var_dump(isset($name));
var_dump(isset($name2));
echo isset($name) ? 'ok' : '';
echo "<br>";
echo isset($name2) ? 'is set' : 'is not set';
echo '<br>';
echo '<br>';
// Constants
echo "Constants" . "<br><br>";

define('PI', 3.14);
echo PI.'<br>';
var_dump(defined('PI')); // defined(PI2)
echo '<br>';
// Using PHP built-in constants
echo "Using PHP built-in constants" . "<br><br>";

echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';