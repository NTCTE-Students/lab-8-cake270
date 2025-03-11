<?php

class User {
    private $username;
    private $passwordHash;

    public function __construct($username) {
        $this->username = $username;
    }

    
    public function setPassword($password) {
      
        $this->passwordHash = password_hash($password, PASSWORD_BCRYPT);
    }


    public function checkPassword($password) {
      
        return password_verify($password, $this->passwordHash);
    }

    public function getUsername() {
        return $this->username;
    }
}


$user = new User("john_doe");
$user->setPassword("securePassword123");

echo "Username: " . $user->getUsername() . PHP_EOL;


if ($user->checkPassword("securePassword123")) {
    echo "Password is correct!" . PHP_EOL; 
} else {
    echo "Password is incorrect!" . PHP_EOL;
}


if ($user->checkPassword("wrongPassword")) {
    echo "Password is correct!" . PHP_EOL;
} else {
    echo "Password is incorrect!" . PHP_EOL; // Вывод: Password is incorrect!
}

?>
