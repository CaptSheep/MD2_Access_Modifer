<?php

namespace Models;

class Product
{
    private string $name;
    private int $price;

    public function __construct($name = '', $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int|mixed $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }


}