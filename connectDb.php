<?php
function connectDatabase(){
    $server = "localhost";
    $username = "username";
    $password = "password";
    $database= "omer_webshop";

    $conn = mysqli_connect($server, $username, $password, $database);
        if (!$conn) {
            die ("Connection failed: " . mysqli_connect_error());
        }

?>