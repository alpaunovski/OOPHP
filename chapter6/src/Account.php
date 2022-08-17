<?php

namespace App;

class Account
{
    private int $accountNumber;

    public function setAccountNumber(int $number)
    {
        $this->accountNumber = $number;
    }

    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }
}