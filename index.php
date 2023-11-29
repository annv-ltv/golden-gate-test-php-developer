<?php

include 'vendor/autoload.php';

use GoldenGate\AmazonShippingService\{
    Classes\Product,
    Classes\Order,
    ShippingFees\WeightDimension,
    ShippingFees\WeightDimensionDiamond
};

$product1 = new Product('https://www.amazon.com/table', 20, 5, 2, 1.2, 1, new WeightDimension);
$product2 = new Product('https://www.amazon.com/smartphone', 500, 0.3, 0, 0, 0, new WeightDimension);
$product3 = new Product('https://www.amazon.com/diamond', 500, 0.01, 0, 0, 0, new WeightDimensionDiamond);

$order1 = new Order;
$order1->addProducts([$product1]);

$order2 = new Order;
$order2->addProducts([$product2]);

$order3 = new Order;
$order3->addProducts([$product3]);

$order4 = new Order;
$order4->addProducts([$product1, $product2, $product3]);

echo 'Table fee: '.number_format($order1->calGrossPrice(), 2, '.', ',')." $\n";
echo 'Smartphone fee: '.number_format($order2->calGrossPrice(), 2, '.', ',')." $\n";
echo 'Diamond fee: '.number_format($order3->calGrossPrice(), 2, '.', ',')." $\n";
echo 'Table + Smartphone + Diamond fee: '.number_format($order4->calGrossPrice(), 2, '.', ',')." $\n";