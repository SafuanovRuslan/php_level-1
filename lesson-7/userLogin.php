<?php
    $login = $_POST["login"];
    $password = $_POST["password"];
    //echo $login;
    $db = mysqli_connect("localhost", "root", "", "soundinside") or die("ошибка подключения");
    $check = mysqli_query($db, "SELECT * FROM `users` WHERE login = '$login'");
    $check = mysqli_fetch_assoc($check);
    if ($check["login"] == $login && $check["password"] == $password) {
        setcookie("login", $_POST["login"]);
        setcookie("password", $_POST["password"]);
        header("Location: favorite.php");
    } else {
        echo "Неверно введены логин или пароль";
    }

    mysqli_close($db);