<?php

namespace App;

class Account
{
    private int $accountNumber;
    private User $accountHolder;

    public function __construct(array $attributes = [])
    {
        foreach ($attributes as $attribute => $value)
        {
            if (property_exists($this, $attribute))
            {
                $this->$attribute = $value;
            }
        }
    }

    public function setAccountNumber(int $number)
    {
        $this->accountNumber = $number;
    }

    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    public function setAccountHolder(User $user)
    {
        $this->accountHolder = $user;
    }

    public function getAccountHolder(): User
    {
        return $this->accountHolder;
    }
}