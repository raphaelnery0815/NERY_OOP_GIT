<?php

class BankAccount
{
    public $accountNumber;
    private $balance;

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
        return $this;
    }

    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->accountNumber = "1";
$account->deposit(500); 
$account->withdraw(200); 

echo $account->accountNumber . "\n"; 
echo $account->getBalance() . "\n"; 
?>
