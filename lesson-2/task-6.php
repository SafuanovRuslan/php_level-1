<?php
// С помощью рекурсии организовать функцию возведения числа в степень. Формат:
// function power($val, $pow), где $val – заданное число, $pow – степень.


function power($val, $pow) {
    if ($pow == 1) {
        return $val;
    } else {
        return power($val, $pow - 1) * $val;
    }
}

echo power(2, 10);