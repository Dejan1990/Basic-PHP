<?php

$age = 90;
$salary = 600000;
//$name = 'Jackie';

// if condition
//if ($age < 22) {       // 1.1 Without curly braces { }
//    echo 'You are young man!!<br>';
//}



// if condition - else
//if ($age < 22) {       // 1.1 Without curly braces { }
//    echo 'You are young man!!<br>';
//} else {
//    echo 'You are not young man!!<br>';
//}
// if condition1 AND condition2
//if ($age < 22 && $salary > 50000) {
//    echo "You are young AND reach";
//}
// if condition1 OR condition2
//if ($age < 22 || $salary > 50000) {
//    echo "You are young OR reach";
//}
// if condition1 - elseif condition2 - else
//if ($age < 22) {
//    echo "You are young<br>";
//} else if ($age > 60) {
 //   echo "You are old<br>";
//} else {
//    echo "You are not young, but not old also<br>";
//}
// if condition1 and condition2 - elseif condition1 and condition2 - else
//if ($age < 22 && $salary >= 500000) {
//    echo 'You are young man AND rich!!<br>';
//} elseif ($age < 22 && $salary < 500000) {
//    echo "You are young, and not so rich<br>";
//} elseif ($age > 60 && $salary >= 500000) {
//    echo 'You are old, but rich<br>';
//} elseif ($age > 60 && $salary < 500000) {
//    echo 'You are old and NOT rich also<br>';
//}
// Ternary ifecho
echo $age < 22 ? 'young' : 'old';
echo "<br>";

// Ternary nested
echo $age < 22 ? ($age < 16 ? 'too young' : 'young') : 'old';
echo "<br>";
// 7.2 Short ternary
$myAge = $age ?: 18; // Equivalent of "$age ? $age : 18"
echo $myAge;
echo "<br>";
// Null coalescing operator
//$var = isset($name) ? $name : 'John';
$var = $name ?? 'John';
echo $var."<br>";
// Null coalescing assignment operator. Since PHP 7.4
$person = [
    //'lastname' => 'Lorens'
];

//if (!isset($person['lastname'])) {
//    $person['lastname'] = 'Anonymous';
//}

//(isset($person['lastname'])) ? $person['lastname'] : $person['lastname'] = 'Anonymous';
//(isset($person['lastname'])) ?: $person['lastname'] = 'Anonymous';
$person['lastname'] ??= 'Anonymous';

echo $person['lastname']."<br>";
// switch
$userRole = 'editor'; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'You can do anything<br>';
        break;
    case 'editor';
        echo 'You can edit content<br>';
        break;
    case 'user':
        echo 'You can view posts and comment<br>';
        break;
    default:
        echo 'Unknown role<br>';
}