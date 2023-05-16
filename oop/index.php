<?php

require_once "./Person.php";
require_once "./Student.php";

//$p = new Person('Zura', 28, null);  // $p -> is an instance

//var_dump($p);

//echo $p->name . "<br>";
//echo $p->age . "<br>";
//echo $p->getSalary();
//$p->setSalary(100);
//echo $p->getSalary() . "<br>";

//var_dump($p);

$s = new Student('Zura', 28, 1234);
echo $s->name . "<br>";
echo $s->age . "<br>";
echo $s->stId;