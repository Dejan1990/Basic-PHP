<?php

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => 'Tennis, Video Games'
];

// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'TraversyMedia';
print_r($person);

// Check if array has specific key
echo "<br>";
var_dump(isset($person['age']));
echo "</br>";

// Print the keys of the array
echo "<br>";
var_dump(array_keys($person));
echo "</br>";

// Print the values of the array
echo "<br>";
var_dump(array_values($person));
echo "</br>";

// Sorting associative arrays by values, by keys
ksort($person);// ksort, krsort, asort, arsort
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays

$todoItems = [
    ['title' => 'Todo one', 'completed' => true],
    ['title' => 'Todo two', 'completed' => false]
];

echo "<br>";
var_dump($todoItems);
echo "</br>";
print_r($todoItems[1]['completed'] ? 'yes' : 'not completed');

?>