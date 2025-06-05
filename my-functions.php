<?php
function formatPrice($priceInCents) {
    $priceInEuros = $priceInCents / 100;
    echo number_format($priceInEuros, 2, ',', ' ') . '€';
}

function priceExcludingVAT($priceTTCinCents) {
    $priceHT = $priceTTCinCents / 1.2;
    $priceHT = round($priceHT);
    formatPrice($priceHT);
    return $priceHT;
}

echo "Prix TTC : ";
formatPrice(1200); 

echo "<br>Prix HT : ";
priceExcludingVAT(1200); 

?>