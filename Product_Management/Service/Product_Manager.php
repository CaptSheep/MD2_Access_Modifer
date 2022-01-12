<?php

namespace Service;

class Product_Manager
{
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    function getProduct(): array
    {
        return $this->products;
    }

}