<?php

declare(strict_types=1);

class Product {
    public string $name;
    public float $price;
    public string $description;

    public function __construct(string $name, string $description, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getProductDisplay(): string
    {
        return "
            <div>
                <h2>$this->name</h2>
                <span>$this->price</span>
                <p>$this->description</p>
            </div>
        ";
    }
}
