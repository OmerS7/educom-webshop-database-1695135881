<?php
function connectDatabase(){
    $server = "localhost";
    $username = "omer_web_shop_user";
    $password = "educom123!";
    $database = "omer_webshop";

    $conn = mysqli_connect($server, $username, $password, $database);
        if (!$conn) {
            die ("Connection failed: " . mysqli_connect_error());
        }
    return $conn;
    }

function findUserByEmail($email){
    $conn = connectDatabase();
    try{
        $email = mysqli_real_escape_string($conn, $email);
        $sql ="SELECT * FROM users WHERE email ='$email'";
        $result = mysqli_query($conn, $sql);

        $user= mysqli_fetch_assoc($result);
        return $user;   
    } finally{
        mysqli_close($conn);
    }
}

function saveUser($email,$username,$password){
    $conn = connectDatabase();
    try{
        $email = mysqli_real_escape_string($conn, $email);
        $sql ="INSERT INTO users (username, email, `password`)
        VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            throw new Exception("save user failed, sql:$sql,error: " . mysqli_error($conn));
        }
    } finally {
        mysqli_close($conn);
    } 
}

function saveContact($name,$phone,$email,$salutation,$communication,$comment){
    $conn = connectDatabase();
    try{
        $email = mysqli_real_escape_string($conn, $email);
        $sql ="INSERT INTO contact(`name`, phone, email, salutation, communication, comment)
        VALUES ('$name', '$phone', '$email', '$salutation', '$communication', '$comment')";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            throw new Exception("save contact failed, sql:$sql,error: " . mysqli_error($conn));
        }
    } finally {
        mysqli_close($conn);
    }
}

function findUserByPassword($password){
    $conn = connectDatabase();
    try{
        ///$email = mysqli_real_escape_string($conn, $email);
        $sql ="SELECT * FROM users WHERE `password` ='$password'";
        $result = mysqli_query($conn, $sql);

        $userpassword= mysqli_fetch_assoc($result);
        return $userpassword;   
    } finally{
        mysqli_close($conn);
    }
}



/// wachtwoord wijzigen functie
function saveChangePassword($password){
    $conn = connectDatabase();
    try{
        $sql ="INSERT INTO users (`password`);
        VALUES ('$password')";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            throw new Exception("save password failed, sql:$sql,error: " . mysqli_error($conn));
        }
    } finally {
        mysqli_close($conn);
    } 
}