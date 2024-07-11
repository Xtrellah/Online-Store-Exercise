<?php

declare(strict_types=1);

require_once 'src/classes/product.php';
require_once 'src/classes/basket.php';


//Page Display
echo "<h1>My Store</h1>";

$item1 = new Product('name', 'product desc', 45.69);
$item2 = new Product('name', 'product desc', 45.69);
$item2->applyDiscount();

echo $item1->getProductDisplay();
echo $item2->getProductDisplay();

echo "<h1>Your Basket</h1>";

$basket1 = new Basket("Max");
$basket1->addProduct($item1);
$basket1->addProduct($item2);

echo $basket1->displayBasket();