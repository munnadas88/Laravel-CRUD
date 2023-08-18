<?php
// Base Animal class
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "Some generic animal sound";
    }
}
class Lion extends Animal {
    public function makeSound() {
        return "Roar!";
    }
}

// Subclasses demonstrating polymorphism
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
       
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

class Elephant extends Animal {
    public function makeSound() {
        return "Trumpet!";
    }
}

// Usage
$lion = new Lion("Simba");
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");
$elephant = new Elephant("Dumbo");


$animals = [$lion,$dog, $cat, $elephant];

foreach ($animals as $animal) {
    echo $animal->name . " says: " . $animal->makeSound() . "\n";
}


?>