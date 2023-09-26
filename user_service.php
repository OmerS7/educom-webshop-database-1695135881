<?php
require_once 'db.repository.php';

function doesEmailExist($email){
    $user = findUserByEmail($email);
    return !empty($user);
}

function doesPasswordExist($password){
    $userpassword = findUserbyPassword($password);
    return !empty($userpassword);
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

function authenticateUserPassword($password){
    $userpassword = findUserByPassword($password);
        if (empty($userpassword)){
            return null;
        }
        if ($userpassword["password"]!=$password){
            return null;
        }
    return $userpassword;   
}


function storeUser($email,$username,$password){
   saveUser($email,$username,$password);
}

function storeContact($name,$phone,$email,$salutation,$communication,$comment){
    saveContact($name,$phone,$email,$salutation,$communication,$comment);
}

function storeChangePassword($changepassword,$repeatchangepassword){
    saveChangePassword($changepassword,$repeatchangepassword);
}