<?php
   /**
    * We sluiten het bestand require.php in
    */ 
   require_once '../app/require.php';
   require_once 'config.php';
   require_once 'controllers/ProductController.php';

$pdo = require 'config.php';
$controller = new ProductController($pdo);

$action = $_GET['action'] ?? 'list';
$id = $_GET['id'] ?? null;

if ($action == 'details' && $id) {
    $controller->showProductDetails($id);
} else {
    $controller->showProductList();
}
