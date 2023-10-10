<?php

function showOrderDetailHeader(){
    echo 'Overzicht orders';
}

function showOrderDetailContent($data) {
    $orders = getArrayVar($data, 'orders', NULL);

    if ($orders) {
        echo '<div class="orderOverzicht">';
        echo $orders['id'];
        echo "</div>"; 
    } else {
        echo"Er is een probleem met het ophalen van de order(s).";
    }
}
?>