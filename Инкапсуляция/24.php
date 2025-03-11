<?php

class Counter {
    private $count;

    public function __construct($initialCount = 0) {
        $this->count = $initialCount >= 0 ? $initialCount : 0; 
    }

    public function increment() {
        $this->count++;
    }

    public function decrement() {
        if ($this->count > 0) {
            $this->count--;
        } else {
            throw new UnderflowException("Счётчик не может быть уменьшен ниже нуля.");
        }
    }


    public function getCount() {
        return $this->count;
    }
}

// Пример использования
try {
    $counter = new Counter(); 
    echo "Текущий счётчик: " . $counter->getCount() . PHP_EOL; 

    $counter->increment(); 
    echo "После инкремента: " . $counter->getCount() . PHP_EOL; 

    $counter->decrement();
    echo "После декремента: " . $counter->getCount() . PHP_EOL;
 
    $counter->decrement(); 
} catch (UnderflowException $e) {
    echo "Ошибка: " . $e->getMessage() . PHP_EOL; 
}

?>