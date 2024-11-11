<?php

class Magazijn
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllWarehouseProducts()
    {
        $query = "SELECT Magazijn.*, Product.Naam, Product.Barcode 
                  FROM Magazijn 
                  JOIN Product ON Magazijn.ProductId = Product.Id
                  ORDER BY Product.Barcode ASC";
        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getWarehouseProductByProductId($productId)
    {
        $stmt = $this->pdo->prepare(
            "SELECT Magazijn.*, Product.Naam, Product.Barcode 
             FROM Magazijn 
             JOIN Product ON Magazijn.ProductId = Product.Id 
             WHERE ProductId = :productId"
        );
        $stmt->execute(['productId' => $productId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
