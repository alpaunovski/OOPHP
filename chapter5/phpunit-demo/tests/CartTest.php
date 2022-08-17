<?php

use App\Cart;
class CartTest extends \PHPUnit\Framework\TestCase
{

    protected $cart;

    protected function setUp(): void
    {
        $this->cart = new Cart();
    }
    public function testCorrectNetPriceReturned()
    {
        require 'src/Cart.php';
        $this->cart->price = 10;
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(12, $netPrice);


    }

    public function the_cart_tax_value_can_be_changed()
    {
        Cart::$tax = 1.5;

        $this->cart->price = 10;

        $netPrice = $this->cart->getNetPrice();

        $this->assertEquals(15, $netPrice);
    }
}