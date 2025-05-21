<?php
$products = [
    "iphone16" => [
        "name" => "iPhone 16",
        "price" => 3999, 
        "weight" => 150, 
        "discount" => 10,
        "picture_url" => "<img src='iphone16.jpg' alt='image iphone16'>"
    ],
    "ipad" => [
        "name" => "iPad",
        "price" => 1499,
        "weight" => 300,
        "discount" => null,
        "picture_url" => "<img src='ipad.jpg' alt='image ipad'>"
    ],
    "iMac" => [
        "name" => "iMac",
        "price" => 999,
        "weight" => 150,
        "discount" => 5,
        "picture_url" => "<img src='imac.jpg' alt='image imac'>"
    ],
];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue des produits</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .product {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            width: 300px;
            display: inline-block;
            vertical-align: top;
        }
        .product img {
            width: 100%;
            height: auto;
        }
        .product h3 {
            color: #333;
        }
        .product p {
            font-size: 14px;
        }
    </style>
</head>
<body>


    <?php foreach ($products as $product): ?>
        <div class="product">
            <h3><?php echo $product['name']; ?></h3>
            <p>Prix: <?php echo $product['price'] / 100; ?>€</p> 
            <p>Poids: <?php echo $product['weight']; ?>g</p>
            <p>Remise: <?php echo $product['discount'] ? $product['discount'] . "%" : "Aucune"; ?></p>
            <p><?php echo $product['picture_url']; ?></p>
        </div>
    <?php endforeach; ?>

</body>
</html>
