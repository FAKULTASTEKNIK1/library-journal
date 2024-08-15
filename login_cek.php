<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (($username=="ftek")&&($password=="123")){
        header("Location:index.php?pesan=sukses");
    }
    else{
        header("Location:index.php?pesan=kesalahan");
    }
?>
