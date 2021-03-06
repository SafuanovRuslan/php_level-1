<?php
// Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве 
// значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, 
// чтобы результат был таким:

// Московская область:
// Москва, Зеленоград, Клин
// Ленинградская область:
// Санкт-Петербург, Всеволожск, Павловск, Кронштадт
// Рязанская область … (названия городов можно найти на maps.yandex.ru)


$map = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Рязань", "Михайлов", "Скопин", "Касимов"],
];

foreach ($map as $obl => $cities) {
    echo "$obl:<br>";
    echo implode($cities, ", ")."<br>";
}