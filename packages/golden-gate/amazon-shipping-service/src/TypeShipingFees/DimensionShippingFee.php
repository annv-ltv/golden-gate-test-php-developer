<?php

namespace GoldenGate\AmazonShippingService\TypeShipingFees;

use GoldenGate\AmazonShippingService\Contracts\IProduct;

class DimensionShippingFee extends BaseShippingFeeType
{
    function getUnitName()
    {
        return 'm3';
    }

    function getPricePerUnit()
    {
        return 11;
    }

    function calculate(IProduct $product): float
    {
        return $product->getWidth() * $product->getHeight() * $product->getdepth() * $this->getPricePerUnit();
    }
}