<?php
include 'model/product.php';

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function add() {
        // To be implemented
    }

    public function edit() {
        // To be implemented
    }

    public function delete() {
        // To be implemented
    }
}
