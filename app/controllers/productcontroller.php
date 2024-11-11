// controllers/ProductController.php
<?php

require_once 'models/Product.php';
require_once 'models/Magazijn.php';

class ProductController
{
    private $productModel;
    private $magazijnModel;

    public function __construct($pdo)
    {
        $this->productModel = new Product($pdo);
        $this->magazijnModel = new Magazijn($pdo);
    }

    public function showProductList()
    {
        $products = $this->magazijnModel->getAllWarehouseProducts();
        include 'views/productList.php';
    }

    public function showProductDetails($productId)
    {
        $product = $this->productModel->getProductById($productId);
        $warehouseInfo = $this->magazijnModel->getWarehouseProductByProductId($productId);

        if ($warehouseInfo) {
            include 'views/productDetails.php';
        } else {
            echo "Er is van dit product op dit moment geen voorraad aanwezig, de verwachte eerstvolgende levering is: 30-04-2023";
        }
    }
}
