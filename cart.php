<?php
// mes produits dispo
$products = [
    "iPhone 16" => 150099,
    "iPad Pro" => 14099,
    "iMac pro" => 2999
];

// Verif
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product_name = $_POST['product_name'] ?? '';
    $quantity = $_POST['quantity'] ?? 0;

    // Verif existence
    if (!array_key_exists($product_name, $products)) {
        echo "Produit non valide.";
        exit;
    }

    // Verif nmbre positif
    if (!filter_var($quantity, FILTER_VALIDATE_INT) || $quantity <= 0) {
        echo "Quantité non valide.";
        exit;
    }

    // Prix unit par 100
    $price = $products[$product_name] / 100;
    $total_ht = $price * $quantity;
    $tva = $total_ht * 0.20;
    $total_ttc = $total_ht + $tva;
} else {
    echo "Aucune commande reçue.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier</title>
</head>
<body>
    <h1>Votre commande</h1>
    <p><strong>Produit :</strong> <?= htmlspecialchars($product_name) ?></p>
    <p><strong>Quantité :</strong> <?= $quantity ?></p>
    <p><strong>Prix unitaire :</strong> <?= number_format($price, 2) ?> €</p>
    <p><strong>Total HT :</strong> <?= number_format($total_ht, 2) ?> €</p>
    <p><strong>TVA (20%) :</strong> <?= number_format($tva, 2) ?> €</p>
    <p><strong>Total TTC :</strong> <?= number_format($total_ttc, 2) ?> €</p>
</body>
</html>
