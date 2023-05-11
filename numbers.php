<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo "Arithmetic operations" . "<br><br>";

echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>'; // 3. Several arithmetic operations - (* $c + 6)
echo $a / $b . '<br>';
echo $a % $b . '<br><br>';

// Assignment with math operators

//$a += $b; echo $a.'<br>'; // $a = 9
//$a -= $b; echo $a.'<br>'; // $a = 1
//$a *= $b; echo $a.'<br>'; // $a = 20
//$a /= $b; echo $a.'<br>'; // $a = 1.25
//$a %= $b; echo $a.'<br>'; // $a = 1
// Increment operator
echo "Increment operator" . "<br><br>";

echo $a++ . '<br>';
echo ++$a . '<br>';
// Decrement operator
echo "Decrement operator" . "<br><br>";

echo $a-- . '<br>';
echo --$a . '<br><br>';

// Number checking functions
echo "Number checking functions" . "<br><br>";

var_dump(is_float(1.25)); // true
var_dump(is_integer(3.4)); // false
var_dump(is_integer(39)); // true
var_dump(is_numeric(4)); // true
var_dump(is_numeric("3.45")); // true
var_dump(is_numeric("3g.45")); // true
echo "<br>";
// Conversion
echo "Conversion" . "<br><br>";

$strNumber = '12.34';
$number = (int)$strNumber; // 8. Use floatval(), (int), intval()
var_dump($number);
echo "<br>";
// Number functions
echo "Number functions" . "<br><br>";

echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br><br>';
// Formatting numbers
echo "Formatting numbers";

$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br>';
// https://www.php.net/manual/en/ref.math.php