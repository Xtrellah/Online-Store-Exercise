<?php

declare(strict_types=1);

class Product {
    public string $name;
    public float $price;
    public string $description;
    private bool $discount = false;

    public function __construct(string $name, string $description, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function applyDiscount(): void
    {
        $this->discount = true;
    }

    public function getProductDisplay(): string
    {
        if ($this->discount) {
            $this->newPrice = $this->price * 0.9;
            return "
            <div>
                <h2>$this->name</h2>
                <span>Was £$this->price</span><br>
                <span>Now £$this->newPrice (10% off)</span>
                <p>$this->description</p>
            </div>
        ";
        }
        return "
            <div>
                <h2>$this->name</h2>
                <span>£$this->price</span>
                <p>$this->description</p>
            </div>
        ";
    }

    public function getBasketDisplay(): string
    {
        if ($this->discount) {
            $this->newPrice = $this->price * 0.9;
            return "$this->name - £$this->newPrice";
        }
        else
        {
            return "$this->name - £$this->price";
        }
    }
}
