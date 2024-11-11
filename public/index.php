<?php
   /**
    * We sluiten het bestand require.php in
    */ 
   require_once '../app/require.php';
   require 'magazijn_db.php';
   require 'models/Product.php';
   require 'models/Allergeen.php';
   require 'controllers/ProductController.php';

$productModel = new Product($pdo);
$allergenModel = new Allergeen($pdo);
$productController = new ProductController($productModel, $allergenModel);

if (isset($_GET['action']) && $_GET['action'] === 'viewAllergens' && isset($_GET['productId'])) {
    $productController->showAllergenInfo($_GET['productId']);
} else {
    // Redirect to the main overview or error page if parameters are missing
    header('Location: overview.php'); // Replace with actual overview URL
    exit;
}

