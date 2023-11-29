<?php

namespace GoldenGate\AmazonShippingService\Contracts;

interface IShippingFee
{
    function calculate(IProduct $product): float;
}