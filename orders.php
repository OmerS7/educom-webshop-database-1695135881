<?php
function showOrdersHeader(){
    echo 'Jouw Orders';
}

function showOrdersContent($data){
    if (isset($data['succes']) && $data['succes']) {
        $orders = $data['orders'];
        $orders = getAllOrders();
        foreach ($orders as $order) {
            echo '<div class="order">';
            echo "<p>Orderdatum: ;$order[orderDate]</p>";
            echo "<p>Ordernummer: ;$order[orderNumber]</p>";
            echo "</div>";
        }   
    }
}