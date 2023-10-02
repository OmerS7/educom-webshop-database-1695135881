<?php

function showShoppingCartHeader(){
echo 'Winkelwagen';
}

function showShoppingCartContent($data){
foreach ($cart as $productId => $quantity) {
    $products= getProductById($productId);
       
        echo '<div class="cart-item">';
        echo "<img src='Images/{$product['productimage']}' alt='{$product['productname']}'>";
        echo "<h3>{$product['productname']}</h3>";
        echo "<p>Aantal: &euro;{$quantity['quantity']}<p/>";
        echo "<p>Prijs: &euro;{$product['price']}</p>";
        echo "</div>";
    }

    foreach ($cart as $productId => $quantity) {
        $productInfo = getProductById($productId); // Veronderstel dat getProductById($id) bestaat
        $totalPrice += $productInfo['price'] * $quantity;
    }
        echo '<div class="total">';
        echo "<p>Totaal: €$totalPrice ?</p>";
        echo "</div>";
}