<?php
require 'ThreeDimensionalShape.php';
class Cylinder extends ThreeDimensionalShape
{
    public function volume(): float
    {
        return pi() * pow($this->dimensions['radius'], 2) * $this->dimensions['height'];
    }
}