<?php

class Vehicle {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getInfo() {
        return "{$this->year} {$this->make} {$this->model}";
    }
}

class Car extends Vehicle {
    public $doors;

    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this->doors = $doors;
    }

    public function getInfo() {
        return parent::getInfo() . ", Дверей: {$this->doors}";
    }
}

class Bike extends Vehicle {
    public $type;

    public function __construct($make, $model, $year, $type) {
        parent::__construct($make, $model, $year);
        $this->type = $type;
    }

    public function getInfo() {
        return parent::getInfo() . ", Тип: {$this->type}";
    }
}

class Truck extends Vehicle {
    public $loadCapacity;

    public function __construct($make, $model, $year, $loadCapacity) {
        parent::__construct($make, $model, $year);
        $this->loadCapacity = $loadCapacity;
    }

    public function getInfo() {
        return parent::getInfo() . ", Вес: {$this->loadCapacity} тонн";
    }
}

$car = new Car("Машинка", "красивая", 2020, 7);
$bike = new Bike("Штучка", "модная", 2021, "спорт");
$truck = new Truck("мяучка", "гав", 2019, 20);

echo $car->getInfo() . PHP_EOL; 
echo $bike->getInfo() . PHP_EOL; 
echo $truck->getInfo() . PHP_EOL; 

?>