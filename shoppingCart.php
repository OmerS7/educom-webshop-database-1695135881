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
    echo '<tr>';
    echo '<th>Product</th>';
    echo '<th>add/delete</th>';
    echo '<th>Naam</th>';
    echo '<th>Aantal</th>';
    echo '<th>Subtotaal</th>';
    echo '</tr>';

    foreach ($data["cartLines"] as $cartLine) {
        echo '<tr>';
        echo '<td><img src="Images/' . $cartLine["image"] . '" alt="' . $cartLine["name"] . '"></td>';
        echo '<td>';
        echo '<form method="POST" action="index.php">  
                <input type="hidden" name="action" value="addDeleteButton">
                <input type="hidden" name="productId" value="' . $cartLine["productId"] . '">
                <input type="hidden" name="page" value="Winkelwagen">
                <input type="submit" name="increase" value="+">
                <input type="submit" name="decrease" value="-">
              </form>';
        echo '</td>';
        echo '<td>' . $cartLine["name"] . '</td>';
        echo '<td>' . $cartLine["amount"] . '</td>';
        echo '<td>&euro;' . $cartLine["subTotal"] . '</td>';
        echo '</tr>';
    }

    echo '<tr>';
    echo '<td colspan="3">Totaal:</td>';
    echo '<td>&euro;' . $data["totalPrice"] . '</td>';
    echo '</tr>';

    echo '</table>';
}
?>
