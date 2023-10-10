<?php
function showOrdersHeader(){
    echo 'Jouw Orders';
}

function showOrdersContent($data){
echo '<table>';    
    if (isset($data['succes']) && $data['succes']) {
        $orders = getAllOrders();
        foreach ($orders as $order) {
            echo '<tr>';
            echo '<div class="order">';
            echo "<h2>Uw bestelling op:</h2>";
            $formatted_date = date('d-m-Y', strtotime($order['orderDate']));
            echo "<p> $formatted_date</p>";
           // echo "<p> $order[orderDate]</p>";
            echo "<p>Met ordernummer:</p>";
            echo "<p> $order[orderNumber]</p>";
            echo "<p>Totaal: &euro;$order[total]</p>";
            echo "</div>";
            echo '<form method="POST" action="index.php">
                  <input type="hidden" name="action" value="viewDetails">
                  <input type="hidden" name="id" value="'.$order['id'].'">
                  <input type="hidden" name="page" value="orderDetail">
                  <input type="submit" value="Jouw bestelling">
                  </form>';
            echo '</tr>';

echo '</table>';
        }   
    }
}