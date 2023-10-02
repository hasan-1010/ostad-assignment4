<?php
class Product
{
    // class properties
    private int $id;
    private string $name;
    private float $price;

    // constructor method
    public function __construct(int $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    //get the formatted price
    public function getFormattedPrice(): string
    {
        return number_format($this->price, 2);
    }

    //show product details
    public function showDetails(): void
    {
        echo "Product Details:\n";
        echo "- ID: " . $this->id . "\n";
        echo "- Name: " . $this->name . "\n";
        echo "- Price: $" . $this->getFormattedPrice() . "\n";
    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
