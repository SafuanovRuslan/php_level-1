<?php
// Объединить две ранее написанные функции в одну, которая получает строку на русском языке,
// производит транслитерацию и замену пробелов на подчеркивания 
// (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах)


function translite($str) {
    $letters = [
        "а" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ё" => "yo",
        "ж" => "zh",
        "з" => "z",
        "и" => "i",
        "й" => "j",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "х" => "h",
        "ц" => "ts",
        "ч" => "ch",
        "ш" => "sh",
        "щ" => "sch",
        "ъ" => "''",
        "ы" => "y",
        "ь" => "'",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya",
    ];
    $ruLetters = [];
    $enLetters = [];

    // разбиваем ассоциативный массив на 2 обычных (наверняка есть способ проще, но я его пока не знаю)
    foreach ($letters as $ru => $en) {
        $ruLetters[] = $ru;
        $enLetters[] = $en;
    }

    $str = str_replace(" ", "_", $str);
    return str_replace($ruLetters, $enLetters, $str);
} 

// На прописные буквы не работает, нужно добавить их отдельно в массив
echo translite("привет, мир!");