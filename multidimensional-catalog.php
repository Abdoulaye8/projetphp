<?php

$products = [
    "iPhone 16" => [
        "name" => "iPhone 16",
        "price" => 3999, 
        "weight" => 150, 
        "discount" => 10, 
        "picture_url" => "iphone16.jpg" 
    ],
    "iPad Pro" => [
        "name" => "iPad Pro",
        "price" => 1499, 
        "weight" => 300, 
        "discount" => null, 
        "picture_url" => "ipad.jpg" 
    ],
    "iMac 2024" => [
        "name" => "iMac 2024",
        "price" => 2999, 
        "weight" => 500, 
        "discount" => 5, 
        "picture_url" => "imac.jpg" 
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue des Produits</title>
    <style>
        body {
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin: 0;
            padding: 0;
            background-color:rgb(61, 52, 52);
            line-height: 1.6;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            overflow: hidden;
        }

        .product {
            border: 1px solid #ddd;
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            width: 30%;
            float: left;
            margin-right: 5%;
            text-align: center;
            box-sizing: border-box;
        }
        .product img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .product h3 {
            color: #333;
            font-size: 18px;
        }

        .product p {
            font-size: 14px;
            margin: 5px 0;
        }

        .price {
            font-weight: bold;
            color: green;
        }

        .discount {
            color: red;
            font-weight: bold;
        }

        .no-discount {
            color: gray;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
   
    foreach ($products as $product_name => $product) {
        echo "<div class='product'>";
        echo "<h3>" . $product_name . "</h3>";
        echo "<p><strong>Nom :</strong> " . $product["name"] . "</p>";
        echo "<p><strong>Poids :</strong> " . $product["weight"] . "g</p>";
        echo "<p><strong>Prix :</strong> <span class='price'>" . $product["price"] / 100 . "€</span></p>"; 
        echo "<p><strong>Remise :</strong> " . ($product["discount"] ? "<span class='discount'>" . $product["discount"] . "%</span>" : "<span class='no-discount'>Aucune</span>") . "</p>";
        echo "<p><img src='" . $product["picture_url"] . "' alt='" . $product["name"] . "' /></p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
