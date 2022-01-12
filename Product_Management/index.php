<?php
include_once "Models/Product.php";
include_once "Service/Product_Manager.php";
use Service\Product_Manager;
use Models\Product;

$productManager = new Product_Manager();
$productManager->addProduct(new Product("Laptop"));
$productManager->addProduct( new Product("Phone"));
$products = $productManager-> getProduct();
foreach ($products as $product) {
    echo $product->getName() . "<br>";
}
