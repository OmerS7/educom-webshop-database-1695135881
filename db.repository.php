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
    $sql ="SELECT * FROM users WHERE email ='$email'";
    $result = mysqli_query($conn, $sql);

    $user= mysqli_fetch_assoc($result);    
    /*
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - email: " .
       $row["email"]. " " . $row["password"]. "<br>";
        }
    } else {
        echo "0 results";
    }*/

    mysqli_close($conn);
    return $user;
}

function saveUser($email,$username,$password){
    $conn = connectDatabase();
    $sql ="INVERT INTO users (username, email, `password`)
    VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        throw new Exception("save user failed, sql:$sql,error: " . mysqli_error($conn));
    }
    mysqli_close($conn);
}
?>