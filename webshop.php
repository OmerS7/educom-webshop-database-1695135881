<?php
require_once("session_manager.php");
require_once("utils.php");


function handleAction(){
    $action = getPostVar("action");
        switch($action){
            case 'addToCart':
                $id= getPostVar('productId');
                $page = getPostVar('page');
                addToCart($id);
                break;
            case 'updateCart':
                $id= getPostVar('productId');
                $amount = getPostVar('amount');
                updateCart($id, $amount);
                break;
            case 'deleteFromCart':
                $id= getPostVar('productId');
                deleteFromCart($id);
                break;
            case 'checkOutCart':
                $id= getLoggedInUserId();
                checkOutCart($id, $orderNumber);
                break;
        }
}


function showWebshopHeader(){
    echo "Webshop";
}
function showWebshopContent($data) {
    if (isset($data['succes']) && $data['succes']) {
        $products = $data['products'];
        foreach ($products as $product) {
            echo '<div class="webproduct">';
            echo "<img src='Images/$product[productimage]' alt='$product[productname]'>";
            echo "<h3>$product[productname]</h3>";
            echo "<a href='index.php?page=detail&id=$product[productId]'>Productomschrijving"; // Link naar de detailpagina
            echo "<p>Prijs: &euro;$product[price]</p>";
            echo "</a>";
            echo "</div>";
            echo '<form method="POST" action="index.php">          
            <input type="hidden" name="action" value="addToCart">
            <input type="hidden" name="productId" value="'.$product["productId"].'">
            <input type="hidden" name="page" value="webshop">
            <input type="submit" value="Toevoegen">
        </form>';
        }
    }
    
    
}
