<?php



function showWebshopHeader(){
    echo "Webshop";
}
function showWebshopContent($data) {
    if (isset($data['succes']) && $data['succes']) {
        $products = $data['products'];
        foreach ($products as $product) {
            echo '<div class="webproduct">';
            echo "<img src='Images/{$product['productimage']}' alt='{$product['productname']}'>";
            echo "<h3>{$product['productname']}</h3>";
            echo "<a href='index.php?page=detail&id={$product['productId']}'>Productomschrijving"; // Link naar de detailpagina
            echo "<p>Prijs: €{$product['price']}</p>";
            echo "</a>";
            echo "</div>";
        }
    }
    echo '<form method="POST" action="index.php">          
            <input type="hidden" name="action" value="addToCart">
            <input type="hidden" name="id" value="'.$product['id'].'">
            <input type="hidden" name="page" value="webshop">
            <input type="submit" value="Toevoegen">
        </form>';
}
