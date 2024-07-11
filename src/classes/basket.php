<?php

declare(strict_types=1);

require_once 'src/classes/product.php';

class Basket {
    private string $customerName;
    private array $products= [];

    public function __construct(string $customerName)
    {
        $this->customerName = $customerName;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function displayBasket(): string
    {
        if (empty($this->products))
        {
            return "<h4>Empty basket</h4>";
        }

        $item = "<h2>$this->customerName</h2>";
        $item .= "<ul>";
        foreach ($this->products as $product)
        {
            $item .= "<li>" . $product->getBasketDisplay() . "</li>";
        }
        $item .= "</ul>";
        return $item;
    }
}