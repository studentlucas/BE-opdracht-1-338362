<?php
class Allergeen {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllergenInfoByProductId($productId) {
        $stmt = $this->pdo->prepare(
            "SELECT a.Naam, a.Omschrijving 
             FROM Allergeen a
             JOIN ProductPerAllergeen pa ON pa.AllergeenId = a.Id
             WHERE pa.ProductId = ?
             ORDER BY a.Naam ASC"
        );
        $stmt->execute([$productId]);
        return $stmt->fetchAll();
    }
}
?>