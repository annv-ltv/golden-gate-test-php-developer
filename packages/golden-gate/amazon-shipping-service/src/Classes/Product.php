<?php

namespace GoldenGate\AmazonShippingService\Classes;

use GoldenGate\AmazonShippingService\Contracts\{IProduct, IShippingFee};

class Product implements IProduct
{
    private $url;
    private $amazonPrice;
    private $weight;
    private $width;
    private $height;
    private $depth;
    private $shippingFee;

    function __construct(string $url, float $amazonPrice, float $weight, float $width, float $height, float $depth, IShippingFee $shippingFee)
    {
        $this->url = $url;
        $this->amazonPrice = $amazonPrice;
        $this->weight = $weight;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->shippingFee = $shippingFee;
    }

    function getUrl(): float
    {
        return $this->url;
    }

    function getAmazonPrice(): float
    {
        return $this->amazonPrice;
    }

    function getWeight(): float
    {
        return $this->weight;
    }

    function getWidth(): float
    {
        return $this->width;
    }

    function getHeight(): float
    {
        return $this->height;
    }

    function getDepth(): float
    {
        return $this->depth;
    }

    function shippingFee(): float
    {
        return $this->shippingFee->calculate($this);
    }
}