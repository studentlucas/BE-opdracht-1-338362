<!-- views/productDetails.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Leveringsinformatie - <?= htmlspecialchars($product['Naam']) ?></title>
</head>
<body>
    <h1>Leveringsinformatie voor <?= htmlspecialchars($product['Naam']) ?></h1>
    <table>
        <tr>
            <th>Naam Leverancier</th>
            <th>Contactpersoon Leverancier</th>
            <th>Leveranciernummer</th>
            <th>Mobiel</th>
        </tr>
    </table>
    <table>
        <tr>
            <th>Datum laatste levering</th>
            <th>Aantal geleverd</th>
        </tr>
    </table>
</body>
</html>
