<?php

class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance = 0) {
        $this->setAccountNumber($accountNumber);
        $this->setBalance($balance);
    }

 
    public function getAccountNumber() {
        return $this->accountNumber;
    }

   
    public function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;
    }

  
    public function getBalance() {
        return $this->balance;
    }

    
    private function setBalance($balance) {
        if ($balance >= 0) {
            $this->balance = $balance;
        } else {
            throw new InvalidArgumentException("Balance cannot be negative.");
        }
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        } else {
            throw new InvalidArgumentException("Deposit amount must be positive.");
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            throw new InvalidArgumentException("Invalid withdrawal amount.");
        }
    }
}

$account = new BankAccount("123456789", 100);
echo "Account Number: " . $account->getAccountNumber() . PHP_EOL; 

$account->deposit(50);
echo "Balance after deposit: " . $account->getBalance() . PHP_EOL; 

$account->withdraw(30);
echo "Balance after withdrawal: " . $account->getBalance() . PHP_EOL; 

try {
    $account->withdraw(200); 
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL; 
}

?>


▎