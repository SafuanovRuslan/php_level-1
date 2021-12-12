<?php
    $db = mysqli_connect("localhost", "root", "", "soundinside") or die("ошибка подключения");
    $result = mysqli_query($db, "SELECT * FROM bits");
    
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
    <?php endwhile?>