<?php

function showShoppingCartHeader(){
echo 'Winkelwagen';
}

/*
function showShoppingCartContent($data){
    foreach ($data["cartLines"] as $cartLine) {
        echo '<div class="cart-product">';
        echo "<img src='Images/$cartLine[image]' alt='$cartLine[name]'>";
        echo "<h3>$cartLine[name]</h3>";
        echo "<a href='index.php?page=shoppingCart&id=$cartLine[productId]'>Ga naar winkelwagen";
        echo "<p>Aantal: $cartLine[amount]<p/>";
        echo "<p>Subtotaal: &euro;$cartLine[subTotal]</p>";
        echo "</a>";
        echo "</div>";
        }
            echo "<p>Totaal: &euro;$data[totalPrice]</p>";
}*/

function showShoppingCartContent($data){
    echo '<table>';
    
    foreach ($data["cartLines"] as $cartLine) {
        echo '<tr>';
        echo '<td class="product">';
        echo '<img src="Images/' . $cartLine["image"] . '" alt="' . $cartLine["name"] . '">';
        echo '<div class="product-details">';
        echo '<span class="product-name">' . $cartLine["name"] . '</span>';
        echo '<form method="POST" action="index.php?page=shoppingCart">  
                <input type="hidden" name="action" value="updateCart">
                <input type="hidden" name="page" value="shoppingCart">
                <input type="hidden" name="productId" value="' . $cartLine["productId"] . '">
                <input type="number" name="amount" min="1" value="' . $cartLine["amount"] . '">
                <input type="image" src="Images/tick-svgrepo-com.svg" alt="Add" width="20" height="20">
              </form>';
        echo '</div>';
        echo '</td>';
        echo '<td>Subtotaal&euro;' . $cartLine["subTotal"] . '</td>';
        echo '</tr>';
    }

    echo '<tr>';
    echo '<td>Totaal: &euro;' . $data["totalPrice"] . '</td>';
    echo '</tr>';

    echo '</table>';
}
?>
