<?php

class Device {
    protected $brand;
    protected $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getInfo() {
        return "Brand: {$this->brand}, Model: {$this->model}";
    }
}

class Smartphone extends Device {
    private $phoneNumber;

    public function __construct($brand, $model, $phoneNumber) {
        parent::__construct($brand, $model);
        $this->phoneNumber = $phoneNumber;
    }

    public function call($number) {
        return "Calling {$number} from {$this->phoneNumber}.";
    }

    public function getInfo() {
        return parent::getInfo() . ", Phone Number: {$this->phoneNumber}";
    }
}

class Laptop extends Device {
    private $ram; // В ГБ

    public function __construct($brand, $model, $ram) {
        parent::__construct($brand, $model);
        $this->ram = $ram;
    }

    public function getInfo() {
        return parent::getInfo() . ", RAM: {$this->ram} GB";
    }
}

class Tablet extends Device {
    private $screenSize; // В дюймах

    public function __construct($brand, $model, $screenSize) {
        parent::__construct($brand, $model);
        $this->screenSize = $screenSize;
    }

    public function getInfo() {
        return parent::getInfo() . ", Screen Size: {$this->screenSize} inches";
    }
}

// Создание объектов
$smartphone = new Smartphone("Apple", "iPhone 14", "123-456-7890");
$laptop = new Laptop("Dell", "XPS 13", 16);
$tablet = new Tablet("Samsung", "Galaxy Tab S7", 11);

// Тестирование объектов
echo $smartphone->getInfo() . PHP_EOL; 
echo $smartphone->call("987-654-3210") . PHP_EOL; 
echo $laptop->getInfo() . PHP_EOL;
echo $tablet->getInfo() . PHP_EOL;

?>
