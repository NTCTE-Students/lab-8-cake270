<?php

trait Logger {
    public function log($message) {
        print("Лог: {$message}<br>");
    }
}

class User {
    use Logger;

    public function createUser($name) {
        // Логика создания пользователя
        $this->log("Пользователь {$name} создан.");
    }

    public function updateUser($name) {
        // Логика обновления пользователя
        $this->log("Пользователь {$name} обновлён.");
    }
}

// Класс Order
class Order {
    use Logger;

    public function createOrder($orderId) {
        // Логика создания заказа
        $this->log("Заказ с ID {$orderId} создан.");
    }

    public function updateOrder($orderId) {
        $this->log("Заказ с ID {$orderId} обновлён.");
    }
}

// Класс Product
class Product {
    use Logger;

    public function createProduct($productName) {
        // Логика создания продукта
        $this->log("Продукт {$productName} создан.");
    }

    public function updateProduct($productName) {
        // Логика обновления продукта
        $this->log("Продукт {$productName} обновлён.");
    }
}

?>