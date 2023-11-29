<?php

namespace GoldenGate\AmazonShippingService\Contracts;

interface IOrder
{
    function calGrossPrice(): float;
}