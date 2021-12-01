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
    <form action="/public/handlers/uploadImage.php" class="file-form" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="uploader" class="file-form__file" acept="image/*">
        <label for="uploader" class="file-form__label center">Choose image</label>
        <div id="pathToFile" class="file-form__path">Файл не выбран</div>
        <input type="submit" value="Download" class="file-form__submit center">
    </form>

    <h1>My images</h2>
    <hr>

    <?php
        include_once $_SERVER["DOCUMENT_ROOT"]."/templates/showGalery.php";
    ?>

    <script>
        const path = document.getElementById("pathToFile");
        const file = document.getElementById("uploader");

        file.addEventListener("change", () => {
            path.innerText = file.value.replace(/.:\\fakepath\\/i, '');
        });
    </script>
</body>
</html>