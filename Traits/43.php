<?php

// Трейт Validatable
trait Validatable {
    public function validate($data) {
        // Общая логика валидации данных
        foreach ($data as $key => $value) {
            if (empty($value)) {
                return "Поле {$key} не может быть пустым.";
            }
        }
        return true;
    }
}

// Класс RegistrationForm
class RegistrationForm {
    use Validatable;

    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function validateForm() {
        return $this->validate($this->data);
    }
}

// Класс LoginForm
class LoginForm {
    use Validatable;

    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function validateForm() {
        return $this->validate($this->data);
    }
}

// Пример использования
$registrationForm = new RegistrationForm(['username' => 'user', 'password' => '']);
echo $registrationForm->validateForm() . "<br>";

$loginForm = new LoginForm(['username' => '', 'password' => 'pass']);
echo $loginForm->validateForm() . "<br>";

?>
