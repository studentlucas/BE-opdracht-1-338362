
<!DOCTYPE html>
<html>
<head>
    <title>Magazijn Overzicht</title>
</head>
<body>
    <h1>Magazijn Overzicht</h1>
    <table>
        <tr>
            <th>Barcode</th>
            <th>Naam</th>
            <th>Aantal Aanwezig</th>
            <th>Leverantie Info</th>
        </tr>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= htmlspecialchars($product['Barcode']) ?></td>
            <td><?= htmlspecialchars($product['Naam']) ?></td>
            <td><?= htmlspecialchars($product['AantalAanwezig'] ?? 'N/A') ?></td>
            <td>
                <a href="index.php?action=details&id=<?= htmlspecialchars($product['ProductId']) ?>">?</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
