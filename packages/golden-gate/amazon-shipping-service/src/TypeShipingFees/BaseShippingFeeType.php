<?php

namespace GoldenGate\AmazonShippingService\TypeShipingFees;

use GoldenGate\AmazonShippingService\Contracts\ITypeShipingFee;

abstract class BaseShippingFeeType implements ITypeShipingFee
{
    abstract function getUnitName();
    abstract function getPricePerUnit();
}