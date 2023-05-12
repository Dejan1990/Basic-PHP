<?php

// while
//while (true) { // Infinite loop: DON'T run this
    // Do something constantly
//}
// Loop with $counter
// $counter = 0;

//while ($counter < 10) {
//    echo "Printing counter: $counter <br>";
//    if ($counter > 5) break;
//    $counter++;
    
//}
//echo "<br>";
// do - while
//$counter = 0;
//do {
 //   echo "$counter is less than 10<br>";
//    $counter++;
//} while ($counter < 10);
// for
for ($i = 0; $i < 10; $i++) {
    if ($i >= 4) break;
    echo "Printing: $i<br>";
}
// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach($fruits as $key => $value) {
    echo $key . ' ' . $value . "<br>";
}
// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];

foreach($person as $key => $value) {
    if ($key === 'hobbies') break;     
    echo $key . ': ' . $value . "<br>";
}