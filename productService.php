<?php
require_once 'db.repository.php';

function getProducts($productname, $price, $productimage){
    return getAllProducts($productname, $price, $productimage);
}