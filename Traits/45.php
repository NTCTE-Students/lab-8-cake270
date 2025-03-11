<?php

// Трейт Authenticatable
trait Authenticatable {
    public function login($username, $password) {
        // Логика авторизации (например, проверка пользователя в БД)
        if ($username === 'admin' && $password === 'password') {
            return "Пользователь {$username} авторизован.";
        }
        return "Ошибка авторизации.";
    }

    public function logout() {
        // Логика выхода пользователя из системы
        return "Пользователь вышел из системы.";
    }
}

// Класс User
class User {
    use Authenticatable;

    private $username;

    public function __construct($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }
}

// Пример использования
$user = new User("admin");
echo $user->login("admin", "password") . "<br>";
echo $user->logout() . "<br>";

?>
