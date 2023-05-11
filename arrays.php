<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];
// Print the whole array
echo '<pre>';
var_dump($fruits); // print_r
print_r($fruits);
echo '</pre>';
// Get element by index
echo $fruits[1].'<br>';
// Set element by index
$fruits[0] = "Peach";
//print_r($fruits);
//var_dump($fruits);

// Check if array has element at index 2
echo '<pre>';
var_dump(isset($fruits[2]));  // Change age into 5
echo '</pre>';

// Append element
var_dump($fruits);
$fruits[] = 'Peach';
echo $fruits[3].'<br>';
var_dump($fruits);
echo "<br>";

// Print the length of the array
echo count($fruits).'<br>';
// Add element at the end of the array
array_push($fruits, 'Foo');
print_r($fruits);
echo "<br>";
// Remove element from the end of the array
array_pop($fruits);
print_r($fruits);
echo "<br>";
// Add element at the beginning of the array
array_unshift($fruits, 'Apple');
print_r($fruits);
echo "<br>";
// Remove element from the beginning of the array
array_shift($fruits);
print_r($fruits);
echo "<br>";
// Split the string into an array
$string = 'Banana,Aplle,Orange';

echo "<pre>";
var_dump(explode(',', $string));
echo "</echo";

print_r($fruits);
// Combine array elements into string
echo implode(",", $fruits).'<br>';
// Check if element exist in the array
echo "<pre>";
var_dump(in_array('Apple', $fruits));
echo "</pre>";
// Search element index in the array
echo "<pre>";
var_dump(array_search('Apple', $fruits));
echo "</pre>";
// Merge two arrays
$vegetables = ['Potato', 'Cucumber'];
echo "<pre>";
var_dump(array_merge($vegetables, $fruits));
var_dump([...$fruits, ...$vegetables]);
echo "</echo>";
// Sorting of array (Reverse order also)
sort($fruits); //sort, rsort, usort
echo "<pre>";
var_dump($fruits);
echo "</echo>";
// Filter, map, reduce of array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
$evens = array_filter($numbers, function ($n) {
    return $n % 2 === 0;
});

echo "<pre>";
var_dump($evens);
echo "</pre>";

$squares = array_map(fn($n) => $n + 1, $numbers);
echo '<pre>';
var_dump($squares);
echo '</pre>';

$sum = array_reduce($numbers, fn($carry, $item) => $carry + $item);
echo $sum.'<br>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays