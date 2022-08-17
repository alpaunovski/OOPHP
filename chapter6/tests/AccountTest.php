<?php

class AccountTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function an_account_number_can_be_set()
    {
        //Setup
        $account = new App\Account();

        //Do something
        $account->setAccountNumber(1);

        //Make assertions
        $this->assertEquals(1, $account->getAccountNumber());
    }

    /** @test */
    public function an_account_can_be_related_to_a_user()
    {

    }
}