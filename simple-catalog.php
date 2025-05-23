<?php
$produits = ["iphone16", "ipad2025", "iMac2024"];

sort($produits);

echo "Premier produit : " . $produits[0] . 
"<br>";

echo "Dernier produit : " . $produits[count($produits) - 1];

$nb_produits = count($produits);
for ($i=0; $i<$nb_produits;$i++)
{
    echo $produits[$i]. '<br />';
}
?>