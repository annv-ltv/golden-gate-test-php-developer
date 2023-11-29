<?php

namespace GoldenGate\AmazonShippingService\TypeShipingFees;

use GoldenGate\AmazonShippingService\Contracts\IProduct;

class DiamondShippingFee extends BaseShippingFeeType
{
    function getUnitName()
    {
        return 'Kg';
    }

    function getPricePerUnit()
    {
        return 1100;
    }

    function calculate(IProduct $product): float
    {
        return $product->getWeight() * $this->getPricePerUnit();
    }
}