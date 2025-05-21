<?php
$produits = ["iphone", "ipad", "iMac"];

sort($produits);

echo "Premier produit : " . $produits[0] . 
"<br>";

echo "Dernier produit : " . $produits[count($produits) - 1]

?>
