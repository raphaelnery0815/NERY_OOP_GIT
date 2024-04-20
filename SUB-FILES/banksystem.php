<?php

trait Account {
    private $accountNumber;

    public function __construct($accountNumber) {
        $this->accountNumber = $accountNumber;
    }

    public function getAccountNumber(){
        return $this->accountNumber;
    }
}

class BankAccount {

    use Account;

    public function __construct(private $accountNumber, private $balance) {}

    public function getAccountNumber() {
        return $this->accountNumber; 
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        if ($amount > 0 ) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance){
            $this->balance -= $amount;
            return true;
        }
        return false;   
    }
}

class SavingAccount extends BankAccount {

    private $interestRate; 

    public function __construct($accountNumber, $balance, $interestRate) {
        parent::__construct($accountNumber, $balance);
        $this->interestRate = $interestRate;
    }

    public function setInterestRate($interestRate) {
        $this->interestRate = $interestRate;
    }

    public function getInterestRate() {
        return $this->interestRate;
    }

    public function addInterest() {
        // CALCULATE INTEREST
        $interest = $this->interestRate * $this->getBalance();

        // DEPOSIT INTEREST TO THE BALANCE
        $this->deposit($interest);
    }
}

class CheckingAccount extends BankAccount
{
    private $minBalance;

    public function __construct($accountNumber, $balance, $minBalance)
{
    if ($balance > 0 && $balance >= $minBalance) {
        parent::__construct($accountNumber, $balance);
        $this->minBalance = $minBalance;
    } else {
        throw new InvalidArgumentException('Amount must be more than zero and higher than the minimum balance.');
    }
}


    public function withdraw($amount)
    {
        $canWithdraw = $amount > 0 && $this->getBalance() - $amount >= $this->minBalance;

        if ($canWithdraw) {
            return parent::withdraw($amount);
        }

        return false;
    }
}

try {
    $checkingAccount = new CheckingAccount(1, 600, 500);
    echo "\nBALANCE CHECK: " . $checkingAccount->getBalance();
} catch (InvalidArgumentException $error) {
    echo "\nERROR: " . $error->getMessage();
}

// SAVINGS SYSTEM
$saveaccount = new SavingAccount(1, 200, 0.05);
echo "\nINTEREST RATE: " . $saveaccount->getInterestRate();

$saveaccount->deposit(100);
echo "\nSAVINGS: " . $saveaccount->getBalance();

$saveaccount->withdraw(50);
echo "\nSAVING BALANCE AFTER WITHDRAWAL: " . $saveaccount->getBalance();

$saveaccount->addInterest();
echo "\nCALCULATED BALANCE W/INTEREST: " . $saveaccount->getBalance();

$saveaccount->setInterestRate(0.10);
echo "\nUPDATED INTEREST RATE: " . $saveaccount->getInterestRate();
$saveaccount->addInterest();
echo "\nCALCULATED BALANCE W/INTEREST: " . $saveaccount->getBalance();



/*
//BANK SYSTEM
echo $account->getAccountNumber();
echo "\n". $account->getBalance();
$account->deposit(500);
echo "\nDEPOSIT: " . $account->getBalance();
$withdrawalAmount = 300;
echo "\nWITHDRAWAL AMOUNT: " . $withdrawalAmount;
$account->withdraw($withdrawalAmount);
echo "\nBALANCE: " . $account->getBalance() . "\n";


var_dump ($account->getBalance());
var_dump ($account->getAccountNumber());
*/











