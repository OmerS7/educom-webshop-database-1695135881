<?php
require_once 'db.repository.php';

function doesEmailExist($email){
    $user = findUserByEmail($email);
    return !empty($user);
}

function authenticateUser($email,$password){
    $user = findUserByEmail($email);
        if (empty($user)){
            return null;
        }
        if ($user["password"]!=$password){
            return null;
        }
    return $user;   
    }

function storeUser($email,$username,$password){
   saveUser($email,$username,$password);
}

function storeContact($name,$phone,$email,$salutation,$communication,$comment){
    saveContact($name,$phone,$email,$salutation,$communication,$comment);
}

/* wachtwijzigen functie
function isPasswordOccupied($password){
    $userpassword = finduserbyPassword($password);
    return !empty($userpassword);
}*/