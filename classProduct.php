<?php
class Product {
    protected $name;
    protected $price;
    protected $discount;

    public function __construct($name, $price, $discount) {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function calculatePrice() {
        return $this->price - ($this->price * $this->discount / 100);
    }
}
?>