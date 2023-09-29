<?php

function showProductDetailContent($data) {
    $product = $data['product'];

    if ($product) {
        echo '<div class="shoesize">';
        echo "<h1>{$product['productname']}</h1>";
        echo "<p>Prijs: €{$product['price']}</p>";
        echo "<img src='Images/{$product['productimage']}' alt='{$product['productname']}'>";
        echo "<p>{$product['description']}</p>";
        echo "</div>";
    } else {
        echo "Product niet gevonden.";
    }
}
?>