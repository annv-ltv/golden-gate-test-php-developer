<?php

namespace GoldenGate\AmazonShippingService\Contracts;

interface ITypeShipingFee
{
    function calculate(IProduct $product): float;
}