<?php
print_r($_FILES);
echo $_FILES["image"]["name"];

$path = $_SERVER["DOCUMENT_ROOT"]."/public/img/large/".$_FILES["image"]["name"];
if( move_uploaded_file($_FILES["image"]["tmp_name"], $path) ) {
    echo "Изображение успешно загружено";
}

