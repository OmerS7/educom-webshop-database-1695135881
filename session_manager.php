<?php
session_start();

function doLoginUser($username, $userId) {
    $_SESSION['username'] = $username;
    $_SESSION['userId'] = $userId;
    $_SESSION['CART'] = array();
}

function isUserLoggedIn() {
    return isset($_SESSION['username']);
}

/*
function getLoggedInUser() {
    return $_SESSION['username'];
}*/

function getLoggedInUser() {
    if (isset($_SESSION['username'])) {
        return $_SESSION['username'];
    } else {
        return null; // Of een andere waarde die aangeeft dat de gebruiker niet is ingelogd
    }
}

function getLoggedInUserId() {
    if (isset($_SESSION['userId'])) {
        return $_SESSION['userId'];
    } else {
        return null; // Of een andere waarde die aangeeft dat de gebruiker niet is ingelogd
    }
}

function doLogoutUser() {
    session_unset();
    session_destroy();
}

function addToCart($id){
    $cart= $_SESSION['cart'];
    if(!array_key_exists($id,$cart)){
        $cart[$id]= 1;
    } else{
        $cart[$id]= $cart[$id]+1;
    }
}


?>
