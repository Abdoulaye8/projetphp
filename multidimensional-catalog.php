<?php
require_once 'my-functions.php';
$products = [
    "iPhone 16" => [
        "name" => "iPhone 16",
        "price" => 150099,
        "weight" => 150,
        "discount" => 10,
        "picture_url" => "iphone16.jpg"
    ],
    "iPad Pro" => [
        "name" => "iPad Pro",
        "price" => 14099,
        "weight" => 300,
        "discount" => null,
        "picture_url" => "ipad.jpg"
    ],
    "iMac pro" => [
        "name" => "iMac pro",
        "price" => 2999,
        "weight" => 500,
        "discount" => 5,
        "picture_url" => "imac.jpg"
    ]
];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue des Produits</title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia;
            margin: 0;
            padding: 0;
            background-color: rgb(61, 52, 52);
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

        .order-form {
            margin-top: 15px;
        }

        .order-form input[type="number"] {
            width: 60px;
            padding: 5px;
            margin-right: 10px;
        }

        .order-form input[type="submit"] {
            padding: 5px 10px;
            background-color: #28a745;
            border: none;
            color: white;
            cursor: pointer;
        }

        .order-form input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <main>
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

                // le formulaire
                echo "<form class='order-form' action='cart.php' method='POST'>";
                echo "<input type='hidden' name='product_name' value='" . htmlspecialchars($product["name"]) . "'>";
                echo "<label for='quantity'>Quantité :</label>";
                echo "<input type='number' name='quantity' id='quantity' value='1' min='1' required>";
                echo "<input type='submit' value='Commander'>";
                echo "</form>";

                echo "</div>";
            }
            ?>
        </div>
    </main>
</body>
