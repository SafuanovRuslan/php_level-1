<?php
// Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.

function transform($str) {
    return str_replace(" ", "_", $str);
}

echo transform("П р о б е л ы");