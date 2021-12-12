<?php
    $login = $_POST["login"];
    $password = $_POST["password"];
    //echo $login;
    $db = mysqli_connect("localhost", "root", "", "soundinside") or die("ошибка подключения");
    $check = mysqli_query($db, "SELECT * FROM `users` WHERE login = '$login'");
    $check = mysqli_fetch_assoc($check);
    if (count($check) == 0) {
        $sql = "INSERT INTO users (login, password) VALUES ('$login', '$password')";
        $result = mysqli_query($db, $sql);
        print_r($result);
        setcookie("login", $_POST["login"]);
        setcookie("password", $_POST["password"]);
        header("Location: favorite.php");
    } else {
        echo "Пользователь с именем $login уже существует";
    }

    mysqli_close($db);