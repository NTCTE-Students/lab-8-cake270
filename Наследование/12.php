<?php

class Employee {
    protected $name;
    protected $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getInfo() {
        return "Name: {$this->name}, Salary: {$this->salary}";
    }
}

class Manager extends Employee {
    public function manageTeam() {
        return "{$this->name} is managing the team.";
    }
}

class Developer extends Employee {
    public function writeCode() {
        return "{$this->name} is writing code.";
    }
}

class Designer extends Employee {
    public function createDesign() {
        return "{$this->name} is creating a design.";
    }
}

// Создание объектов
$manager = new Manager("Alice", 80000);
$developer = new Developer("Bob", 70000);
$designer = new Designer("Charlie", 60000);

// Тестирование объектов
echo $manager->getInfo() . PHP_EOL; // Вывод: Name: Alice, Salary: 80000
echo $manager->manageTeam() . PHP_EOL; // Вывод: Alice is managing the team.

echo $developer->getInfo() . PHP_EOL; // Вывод: Name: Bob, Salary: 70000
echo $developer->writeCode() . PHP_EOL; // Вывод: Bob is writing code.

echo $designer->getInfo() . PHP_EOL; // Вывод: Name: Charlie, Salary: 60000
echo $designer->createDesign() . PHP_EOL; // Вывод: Charlie is creating a design.

?>


▎