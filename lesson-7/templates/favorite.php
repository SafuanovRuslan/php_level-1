<?php
    $curentUserLogin = $_COOKIE["login"] ? $_COOKIE["login"] : header("Location: login.php");
    $curentUserPassword = $_COOKIE["password"] ? $_COOKIE["password"] : header("Location: login.php");

    $db = mysqli_connect("localhost", "root", "", "soundinside") or die("ошибка подключения");

    $favorites = mysqli_fetch_assoc( mysqli_query($db, "SELECT favorite_list FROM users WHERE login = '$curentUserLogin'") )["favorite_list"];
    $favorites = json_decode($favorites, true);

    if ( !is_array($favorites) || count($favorites) == 0 ) {
        echo "Список избранного пуст";
    } else {
        $idRange = "id = {$favorites['0']}";

        for ($i = 1; $i < count($favorites); $i++) {
            $idRange = $idRange." or id = {$favorites[$i]}";
        }

        $result = mysqli_query($db, "SELECT * FROM bits WHERE $idRange");

        while ($data = mysqli_fetch_assoc($result)):?>
            <div class="bit" id="<?= $data["id"]?>">
                <h2 class="bit__title"><?= $data["title"]?></h2>
                <p class="bit__description"><?= $data["description"]?></p>
                <div class="bit__player flex">
                    <audio src="public/files/audio/<?= $data["source"]?>" class="bit__item"></audio>
                    <div class="bit__controls flex">
                        <img src="public/images/authors/<?= $data["author"]?>.jpg" alt="<?= $data["author"]?>" class="bit__album">
                        <button class="bit__play absolute"><i class="fas fa-play"></i></button>
                        <button class="bit__pause absolute none"><i class="fas fa-pause"></i></button>                        
                    </div>
                    <input type="range" name="" id="" class="bit__range" value="40">
                    <div class="bit__controls flex">
                        <a href="public/files/audio/<?= $data["source"]?>" class="bit__link" download><i class="fas fa-arrow-down"></i></a>
                    </div>
                    <div class="bit__controls flex ml-10">
                        <form action=""><button class="bit__favorite absolute" formaction="addToFavorite.php" formmethod="post" name="favorite" value="<?= $data["id"]?>"><i class="far fa-star"></i></button></form>
                    </div>
                </div>
            </div>
        <?php endwhile;
    }


    