<?php

require_once 'productService.php';

function showWebshopHeader(){
    echo "Webshop";
}

function showWebshopContent(){
    $products = getProducts($productname, $price, $productimage);
    foreach ($products as $product) {
        echo "<div>";
        echo "<img src='Images/{$product['productimage']}' alt='{$product['productnane']}'>";
        echo "<h3>{$product['productname']}</h3>";
        echo "<p>Prijs: €{$product['price']}</p>";
        echo "</div>";
    }
}