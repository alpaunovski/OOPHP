<?php

class Basket 

{
    public $itemsTotal;
    public $shippingCost;
    public $discountValue = 30;

    public function calculateSubtotal(){
       $subtotal = $this->itemsTotal + $this->shippingCost - $this->discountValue; 

       return $subtotal;
    }

}

$newBasket = new Basket();

$newBasket->itemsTotal = 21;
$newBasket->shippingCost = 8;


var_dump($newBasket->calculateSubtotal());