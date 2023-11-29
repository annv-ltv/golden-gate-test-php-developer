<?php

namespace GoldenGate\AmazonShippingService\ShippingFees;

use GoldenGate\AmazonShippingService\{
    Contracts\IProduct,
    Contracts\IShippingFee,
    TypeShipingFees\DimensionShippingFee,
    TypeShipingFees\WeightShippingFee,
    TypeShipingFees\DiamondShippingFee
};

class WeightDimensionDiamond implements IShippingFee
{
    private $dimensionShippingFee;
    private $weightShippingFee;
    private $diamondShippingFee;

    function __construct()
    {
        $this->dimensionShippingFee = new DimensionShippingFee;
        $this->weightShippingFee = new WeightShippingFee;
        $this->diamondShippingFee = new DiamondShippingFee;
    }
    
    function calculate(IProduct $product): float
    {
        return max($this->dimensionShippingFee->calculate($product), $this->weightShippingFee->calculate($product), $this->diamondShippingFee->calculate($product));
    }
}