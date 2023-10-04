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

    foreach ($data['cartLines'] as $cartLine){
        echo '<tr>';
        echo '<td class="product" data-productid="' . $cartLine["productId"] . '">';
        echo '<img src="Images/' . $cartLine["image"] . '" alt="' . $cartLine["name"] . '" class="product-photo">';
        echo '<div class="product-details">';
        echo '<span class="product-name">' . $cartLine["name"] . '</span>';
        echo '<form method="POST" action="index.php?page=shoppingCart">  
                <input type="hidden" name="action" value="updateCart">
                <input type="hidden" name="page" value="shoppingCart">
                <input type="hidden" name="productId" value="' . $cartLine["productId"] . '">
                <div class="tick-button-wrapper">
                <input type="number" class="number-button" name="amount" min="1" value="' . $cartLine["amount"] . '">
                <input type="image" class="tick-button" src="Images/tick-svgrepo-com.svg" alt="Add" width="20" height="20">
                </div>
            </form>';
        echo '<form method="POST" action="index.php?page=shoppingCart">
             <input type="hidden" name="action" value="deleteFromCart">
             <input type="hidden" name="page" value="shoppingCart">
             <input type="hidden" name="productId" value="' . $cartLine["productId"] . '">
             <div class="delete-button-wrapper">
                <input type="image" class="delete-button" src="Images/trash-bin-svgrepo-co.svg" alt="Delete" width="20" height="20">
             </div>
             </form>';     
        echo '</div>';
        echo '</td>';
        echo '<td>Subtotaal: &euro;' . $cartLine["subTotal"] . '</td>';
        echo '</tr>';
    }

    echo '<tr>';
    echo '<td>Totaal: &euro;' . $data["totalPrice"] . '</td>';
    echo '</tr>';

    echo '</table>';
}
?>
