<?php
    $curentUserLogin = $_COOKIE["login"] ? $_COOKIE["login"] : header("Location: login.php");
    $curentUserPassword = $_COOKIE["password"] ? $_COOKIE["password"] : header("Location: login.php");

    $db = mysqli_connect("localhost", "root", "", "soundinside") or die("ошибка подключения");
    
    $user = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM users WHERE login = '$curentUserLogin'"));

    if ($user["login"] == $curentUserLogin && $user["password"] == $curentUserPassword) {
        $favorites = mysqli_fetch_assoc( mysqli_query($db, "SELECT favorite_list FROM users WHERE login = '$curentUserLogin'") )["favorite_list"];
        $favorites = json_decode($favorites, true);

        if ( !is_array($favorites) ) {
            $favorites = [];
        } 

        if ( !in_array($_POST["favorite"], $favorites) ) {
            array_push($favorites, $_POST["favorite"]);
        }

        $favorites = json_encode($favorites);

        mysqli_query($db, "UPDATE users SET favorite_list = '$favorites' WHERE login = '$curentUserLogin'");
        header("Location: index.php");
    } else {
        header("Location: login.php");
    }