<?php

function showShoppingCartHeader(){
echo 'Winkelwagen';
}

function showShoppingCartContent($data){
            $totalPrice = 0;
            foreach (($_SESSION['cart']) as $productId => $amount) {
                if (isset($products[$productId])) {
                    $product = $products['productId'];
                    $subTotal = $product['price'] * $amount;
                    $totalPrice += $subTotal;
       
                    echo '<div class="cart-product">';
                    echo "<img src='Images/$product[productimage]' alt='$product[productname]'>";
                    echo "<h3>$product[productname]</h3>";
                    echo "<a href='index.php?page=shoppingCart&id=$product[productId]'>Ga naar winkelwagen";
                    echo "<p>Aantal: $amount<p/>";
                    echo "<p>Subtotaal: &euro;$subTotal</p>";
                    echo "</a>";
                    echo "</div>";
                }
            }
            echo "<p>Totaal: &euro;$totalPrice</p>";
      
}
