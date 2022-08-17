<?php

namespace App;

class ProductRepository
{
    public function fetchProducts(): array
    {
        return $this->getPdo()->prepare('SELECT * FROM products')->fetchAll(\PDO::FETCH_ASSOC);
    }
}