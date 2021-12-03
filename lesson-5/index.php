<?php
    include_once "config.php";
    $id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Photo Galery</title>
    <link rel="stylesheet" href="/public/css/main.css">
</head>
<body>

<?php if($id):
    $image = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM images WHERE id = $id"));?>
    <div class="overview">
        <div class="overview__image">
            <img src="<?= "public/img/large/".$image['source']?>" alt="<?= $image['title'];?>">
        </div>
        <div class="overview__description">
            <?= $image['description'];?>
        </div>
    </div>
    <?php else:?>
        <h1>My images</h2>
        <hr>

        <?php include_once $_SERVER["DOCUMENT_ROOT"]."/templates/showGalery.php";?>
    <?php endif;?>

    <script>
        const path = document.getElementById("pathToFile");
        const file = document.getElementById("uploader");

        file.addEventListener("change", () => {
            path.innerText = file.value.replace(/.:\\fakepath\\/i, '');
        });
    </script>
</body>
</html>