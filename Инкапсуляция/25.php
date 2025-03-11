<?php

class SessionManager {
    public function __construct() {
        session_start();
    }

    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null; 
    }

    public function remove($key) {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]); 
        }
    }
    public function clear() {
        session_unset(); 
    }

    public function destroy() {
        session_destroy(); 
    }
}

// Пример использования
$sessionManager = new SessionManager(); 

$sessionManager->set('username', 'JohnDoe');
echo "Имя пользователя: " . $sessionManager->get('username') . PHP_EOL; 

$sessionManager->remove('username');
echo "Имя пользователя после удаления: " . $sessionManager->get('username') . PHP_EOL;

$sessionManager->set('role', 'admin');
echo "Роль пользователя: " . $sessionManager->get('role') . PHP_EOL; 

$sessionManager->clear(); 
echo "Роль после очистки: " . $sessionManager->get('role') . PHP_EOL; 

$sessionManager->destroy();

?>


▎