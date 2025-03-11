<?php

class Thermostat {
    private $temperature;

    public function __construct($initialTemperature = 20) {
        $this->setTemperature($initialTemperature);
    }

    public function setTemperature($temperature) {
        if ($temperature < 10 || $temperature > 30) {
            throw new InvalidArgumentException("Температура должна быть в диапазоне от 10 до 30 градусов.");
        }
        $this->temperature = $temperature;
    }

    public function getTemperature() {
        return $this->temperature;
    }
}


try {
    $thermostat = new Thermostat(); 
    echo "Текущая температура: " . $thermostat->getTemperature() . "°C" . PHP_EOL; 

    $thermostat->setTemperature(25); 
    echo "Новая температура: " . $thermostat->getTemperature() . "°C" . PHP_EOL; 

    $thermostat->setTemperature(35); 
} catch (InvalidArgumentException $e) {
    echo "Ошибка: " . $e->getMessage() . PHP_EOL; 
}
?>