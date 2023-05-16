<?php

// What is class and instance
class Person {  //Person is a class
    public string $name;
    public int $age;
    private ?float $salary;  // ?float -> means float can be null

    // __construct(){} -> is a special type of function which is called when the instance of the class is created. Whenever we call new Person(), __construct(){} will be executed 
    public function __construct($name, $age, $salary)
    {
        $this->name = $name; // $p == $this in this particular case
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        return $this->salary = $salary;
    }
}