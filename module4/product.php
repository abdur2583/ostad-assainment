<?php
/* class Product {
    // TODO: Add properties
    public $id;
    public $name;
    public $price;
    public function __construct( $id, $name, $price ) {
        // TODO: Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    // TODO: Add getFormattedPrice method
    public function getFormattedPrice() {
        return number_format( $this->price, 2 );
    }
    // TODO: Add showDetails method
    public function showDetails() {
        echo "Product Details:\n";
        echo "- ID: " . $this->id . "\n";
        echo "- Name: " . $this->name . "\n";
        echo "- Price: $" . $this->getFormattedPrice() . "\n";
    }
}
$product = new Product( 1, 'T-shirt', 19.99 );
$product->showDetails(); */

class Product {
    // TODO: Add properties
    public $id;
    public $name;
    public $price;
    public function __construct( $id, $name, $price ) {
        // TODO: Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    // TODO: Add getFormattedPrice method
    public function getFormattedPrice() {
        return number_format( $this->price, 2 );
    }
    // TODO: Add showDetails method
    public function showDetails() {
        echo "Product Details:\n";
        echo "- ID: " . $this->id . "\n";
        echo "- Name: " . $this->name . "\n";
        echo "- Price: $" . $this->price . "\n";
    }
}
$product = new Product( 1, 'T-shirt', 19.99 );
$product->showDetails();
?>
git config --global user.email "abdur2583@gmail.com"
git config --global user.name "abdur2583"