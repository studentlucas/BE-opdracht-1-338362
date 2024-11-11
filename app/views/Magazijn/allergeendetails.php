<!DOCTYPE html>
<html>
<head>
    <title>Allergenen Informatie - <?php echo htmlspecialchars($product['Naam']); ?></title>
</head>
<body>
    <h1>Allergenen informatie voor <?php echo htmlspecialchars($product['Naam']); ?></h1>
    <table border="1">
        <tr>
            <th>Naam</th>
            <th>Omschrijving</th>
        </tr>
        <?php foreach ($allergens as $allergen): ?>
            <tr>
                <td><?php echo htmlspecialchars($allergen['Naam']); ?></td>
                <td><?php echo htmlspecialchars($allergen['Omschrijving']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
