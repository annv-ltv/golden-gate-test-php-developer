<?php

namespace GoldenGate\AmazonShippingService\ShippingFees;

use GoldenGate\AmazonShippingService\{
    Contracts\IProduct,
    Contracts\IShippingFee,
    TypeShipingFees\DimensionShippingFee,
    TypeShipingFees\WeightShippingFee
};

class WeightDimension implements IShippingFee
{
    private $dimensionShippingFee;
    private $weightShippingFee;

    function __construct()
    {
        $this->dimensionShippingFee = new DimensionShippingFee;
        $this->weightShippingFee = new WeightShippingFee;
    }
    
    function calculate(IProduct $product): float
    {
        return max($this->dimensionShippingFee->calculate($product), $this->weightShippingFee->calculate($product));
    }
}