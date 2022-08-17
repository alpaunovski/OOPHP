<?php
use PHPUnit\Framework\TestCase;

class MockProductsTest extends TestCase
{
    public function testMockProductsAreReturned()
    {
        $mockRepo = $this->createMock(\App\ProductRepository::class);

        $mockProductsArray = [
            ['id' => 1, 'name' => 'Acme Radio Knobs'],
            ['id' => 2, 'name' => 'Apple iPhone'],
        ];

        $mockRepo->method('fetchProducts')->willReturn($mockProductsArray);



        $products = $mockRepo->fetchProducts();

        $this->assertEquals('Acme Radio Knobs', $products);
    }
}