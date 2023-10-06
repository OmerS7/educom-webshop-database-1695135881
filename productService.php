<?php
require_once 'db.repository.php';

function getProducts(){
    return getAllProducts();
}

function getProduct($id){
    return getProductById($id);
}

function storeCheckOutCart($id,$orderNumber){
    saveCheckOutCart($id,$orderNumber);
}