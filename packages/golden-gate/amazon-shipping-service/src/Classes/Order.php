<?php

namespace GoldenGate\AmazonShippingService\Classes;

use GoldenGate\AmazonShippingService\Contracts\{IOrder, IProduct};

class Order implements IOrder
{
    private $products = [];

    function addProducts(array $products)
    {
        foreach ($products as $product) {
            $this->addProduct($product);
        }
    }

    function addProduct(IProduct $product)
    {
        $this->products[] = $product;
    }

    function calGrossPrice(): float
    {
        return array_sum(array_map(function ($product) {
            return $product->getAmazonPrice() + $product->shippingFee();
        }, $this->products));
    }
}