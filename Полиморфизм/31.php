<?php

interface Notifier {
    public function send($message);
}

class EmailNotifier implements Notifier {
    public function send($message) {
        print("Отправка email: {$message}<br>");
    }
}

class SMSNotifier implements Notifier {
    public function send($message) {
        print("Отправка SMS: {$message}<br>");
    }
}

class PushNotifier implements Notifier {
    public function send($message) {
        print("Отправка push-уведомления: {$message}<br>");
    }
}

// Пример использования
$emailNotifier = new EmailNotifier();
$smsNotifier = new SMSNotifier();
$pushNotifier = new PushNotifier();

// Тестирование отправки уведомлений
$emailNotifier->send("Привет! Это тестовое сообщение для email.");
$smsNotifier->send("Привет! Это тестовое сообщение для SMS.");
$pushNotifier->send("Привет! Это тестовое сообщение для push-уведомления.");

?>