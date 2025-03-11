<?php

class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function eat() {
        return "{$this->name} is eating.";
    }

    public function sleep() {
        return "{$this->name} is sleeping.";
    }
}

class Bird extends Animal {
    public function fly() {
        return "{$this->name} is flying.";
    }
}

class Fish extends Animal {
    public function swim() {
        return "{$this->name} is swimming.";
    }
}

class Mammal extends Animal {
    public function walk() {
        return "{$this->name} is walking.";
    }
}

$eagle = new Bird("Eagle");
$salmon = new Fish("Salmon");
$lion = new Mammal("Lion");

echo $eagle->eat() . PHP_EOL; 
echo $eagle->fly() . PHP_EOL; 
echo $eagle->sleep() . PHP_EOL; 

echo $salmon->eat() . PHP_EOL; 
echo $salmon->swim() . PHP_EOL; 
echo $salmon->sleep() . PHP_EOL;

echo $lion->eat() . PHP_EOL; 
echo $lion->walk() . PHP_EOL; 
echo $lion->sleep() . PHP_EOL; 

?>


▎