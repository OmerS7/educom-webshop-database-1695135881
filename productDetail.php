<?php

function showProductDetailContent($data) {
    $product = $data['product'];

    if ($product) {
        echo "<h1>{$product['productname']}</h1>";
        echo "<p>Prijs: €{$product['price']}</p>";
        echo "<img src='Images/{$product['productimage']}' alt='{$product['productname']}'>";
        echo "<p>{$product['description']}</p>";
    } else {
        echo "Product niet gevonden.";
    }
}
?>