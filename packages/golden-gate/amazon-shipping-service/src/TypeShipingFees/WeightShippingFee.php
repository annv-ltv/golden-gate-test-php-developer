<?php

namespace GoldenGate\AmazonShippingService\TypeShipingFees;

use GoldenGate\AmazonShippingService\Contracts\IProduct;

class WeightShippingFee extends BaseShippingFeeType
{
    function getUnitName()
    {
        return 'Kg';
    }

    function getPricePerUnit()
    {
        return 11;
    }

    function calculate(IProduct $product): float
    {
        return $product->getWeight() * $this->getPricePerUnit();
    }
}