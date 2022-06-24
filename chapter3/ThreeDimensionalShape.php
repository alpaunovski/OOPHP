<?php

abstract class ThreeDimensionalShape {
    protected array $dimensions;

    public function __constuct(array $dimensions)
    {
        $this->dimensions = $dimensions;
    }

    abstract public function volume(): float;
}