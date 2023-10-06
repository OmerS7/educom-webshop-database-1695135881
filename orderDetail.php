<?php

function showOrderDetailContent($data) {
    $orders = getArrayVar($data, 'order', NULL);

    if ($orders) {
        echo '<div class="shoesize">';
        echo "<h1>$product[productname]</h1>";
        echo "<p>Prijs: &euro;$product[price]</p>";
        echo "<img src='Images/$product[productimage]' alt='$product[productname]'>";
        echo "<p>$product[description]</p>";
        echo "</div>"; 
    } else {
        echo "Product niet gevonden.";
    }
}
?>