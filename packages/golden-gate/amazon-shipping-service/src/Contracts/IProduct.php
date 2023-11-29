<?php

namespace GoldenGate\AmazonShippingService\Contracts;

interface IProduct
{
    function shippingFee(): float;
}