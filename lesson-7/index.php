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
            <div class="content__description">
                На <b>SoundInside</b> вы найдете лучшие биты для вашего YouTube-канала. Вся музыка распространяется бесплатно и не защищена авторским правом. Есть тольео одно условие, укажите ссылку на наш сайт на вашем канале. Нам это поможет развиваться, а другим людям — найти дорогу к нам =)
            </div>
            <main class="content__bits">
                <?php include "templates/content.php";?>
            </main>
        </div>
        <?php include_once "templates/footer.php";?>
    </div>

    <script src="https://kit.fontawesome.com/0b70723568.js" crossorigin="anonymous"></script>
    <script src="public/js/player.js"></script>
</body>
</html>