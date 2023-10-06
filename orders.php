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
            echo "<p> $order[orderDate]</p>";
            echo "<p>Met ordernummer:</p>";
            echo "<p> $order[orderNumber]</p>";
            echo "</div>";
            echo '<from methode="POST" action="index.php">
                  <input type="hidden" name="action" value="addToCart">
                  <input type="hidden" name="page" value="orders">
                  <input type="submit" value="Overzicht Bestelling">
                  </form>';
            echo '</tr>';

echo '</table>';
        }   
    }
}