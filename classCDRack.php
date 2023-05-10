<?php 
class CDRack extends Product {
    private $capacity;
    private $model;

    public function __construct($name, $price, $discount, $capacity, $model) {
        parent::__construct($name, $price, $discount);
        $this->capacity = $capacity;
        $this->model = $model;
    }

    public function getCapacity() {
        return $this->capacity;
    }

    public function getModel() {
        return $this->model;
    }
}
?>