<?php
class BankAccount {
    private $balance;

    public function __construct($balance) {
        $this->balance=$balance;
    }

    public function deposit($anount) {
        if ($anount > 0) {
            $this->balance += $anount;
        }
    }

    public function withdraw($anount) {
        if ($anount > 0 && $anount <= $this->balance) {
            $this->balance -= $anount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount(1000);
$account->deposit(500);
$account->withdraw(200);
echo "Current Balance: " . $account->getBalance(); // Output: Current Balance: 1300
?>