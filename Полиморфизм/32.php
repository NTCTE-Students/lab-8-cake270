<?php

abstract class Payment {
    abstract public function process($amount);
}

class CreditCardPayment extends Payment {
    public function process($amount) {
        print("Обработка платежа по кредитной карте на сумму: {$amount} руб.<br>");
    }
}

class PayPalPayment extends Payment {
    public function process($amount) {
        print("Обработка платежа через PayPal на сумму: {$amount} руб.<br>");
    }
}

class BankTransferPayment extends Payment {
    public function process($amount) {
        print("Обработка банковского перевода на сумму: {$amount} руб.<br>");
    }
}

// Пример использования
$creditCardPayment = new CreditCardPayment();
$payPalPayment = new PayPalPayment();
$bankTransferPayment = new BankTransferPayment();

// Тестирование обработки платежей
$creditCardPayment->process(1500);
$payPalPayment->process(2500);
$bankTransferPayment->process(3500);

?>