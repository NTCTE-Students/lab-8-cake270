<?php
class Order {
    protected $items;
    protected $taxRate; 
    protected $discount; 

    public function __construct($items = [], $taxRate = 0.1, $discount = 0) {
        $this->items = $items;
        $this->taxRate = $taxRate;
        $this->discount = $discount;
    }

    public function calculateTotal() {
        $subtotal = array_sum($this->items);
        $discountAmount = $subtotal * $this->discount;
        $taxAmount = ($subtotal - $discountAmount) * $this->taxRate;

        return $subtotal - $discountAmount + $taxAmount;
    }
}

class OnlineOrder extends Order {
    protected $shippingCost;

    public function __construct($items, $taxRate, $discount, $shippingCost) {
        parent::__construct($items, $taxRate, $discount);
        $this->shippingCost = $shippingCost;
    }

    public function calculateTotal() {
        $subtotal = array_sum($this->items);
        $discountAmount = $subtotal * $this->discount;
        $taxAmount = ($subtotal - $discountAmount) * $this->taxRate;

        return $subtotal - $discountAmount + $taxAmount + $this->shippingCost;
    }
}

class StoreOrder extends Order {
    public function calculateTotal() {
        $subtotal = array_sum($this->items);
        $discountAmount = $subtotal * ($this->discount / 2); 
        return $subtotal - $discountAmount;
    }
}

class TelephoneOrder extends Order {
    public function calculateTotal() {
        $subtotal = array_sum($this->items);
        $fixedDiscount = 5; 
        return max(0, $subtotal - $fixedDiscount); 
    }
}

// Пример использования
$items = [100, 200, 300];

$onlineOrder = new OnlineOrder($items, 0.1, 0.1, 15); 
echo "Итоговая сумма онлайн-заказа: " . $onlineOrder->calculateTotal() . "<br>";

$storeOrder = new StoreOrder($items, 0.1, 0.1); 
echo "Итоговая сумма заказа в магазине: " . $storeOrder->calculateTotal() . "<br>";

$telephoneOrder = new TelephoneOrder($items, 0.1, 0.1); 
echo "Итоговая сумма телефонного заказа: " . $telephoneOrder->calculateTotal() . "<br>";

?>


▎