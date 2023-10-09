<?php

function showOrderDetailHeader(){
    echo 'Overzicht orders';
}

function showOrderDetailContent($data) {
    $order = getArrayVar($data, 'order', NULL);

    if ($order) {
        echo '<div class="orderOverzicht">';
        echo "<h1>$order[productname]</h1>";
        echo "<p>Prijs: &euro;$order[price]</p>";
        echo "<img src='Images/$order[productimage]' alt='$order[productname]'>";
        echo "<p>$order[description]</p>";
        echo "</div>"; 
    } else {
        echo"Er is een probleem met het ophalen van de order(s).";
    }
}
?>