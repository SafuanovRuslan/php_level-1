<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soundinside</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="shortcut icon" href="public/images/cache/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <?php include_once "templates/header.php";?>
        <div class="content">
            <form action="userLogout.php">
                <input type="submit" value="Выйти"><?= $_COOKIE["login"]?>
            </form>
            <main class="content__bits">
                <?php include "templates/favorite.php"?>
            </main>
        </div>
        <?php include_once "templates/footer.php";?>
    </div>

    <script src="https://kit.fontawesome.com/0b70723568.js" crossorigin="anonymous"></script>
    <script src="public/js/player.js"></script>
</body>
</html>