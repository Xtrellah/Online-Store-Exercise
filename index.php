<?php

declare(strict_types=1);

require_once 'src/classes/product.php';

//divider
$item1 = new Product('name', 'product desc', 45.69);
$item2 = new Product('name', 'product desc', 45.69);

echo $item1->getProductDisplay();
echo $item2->getProductDisplay();