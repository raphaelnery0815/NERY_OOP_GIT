<?php

class BankAccount
{
	public $accountNumber;

	public $balance;

	public function deposit($amount)
	{
		if ($amount > 0) {
			$this->balance += $amount;
		}
	}
}
$account = new BankAccount();
$account->accountNumber = "1";
$account->balance = 100;

$account->deposit(100);
$account->deposit(100);
$account->deposit(100);

echo $account->accountNumber . "\n";
echo $account->balance . "\n"; 

 ?>