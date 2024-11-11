<?php
class levanransierController {
    private $productModel;
    private $allergenModel;

    public function __construct($productModel, $allergenModel) {
        $this->productModel = $productModel;
        $this->allergenModel = $allergenModel;
    }

    public function showAllergenInfo($productId) {
        $product = $this->productModel->getProductById($productId);
        $allergens = $this->allergenModel->getAllergenInfoByProductId($productId);

        if ($allergens) {
            require 'views/allergenDetails.php';
        } else {
            require 'views/noAllergen.php';
        }
    }
}
?>