<?php
// Реализовать основные 4 арифметические операции в виде функций 
// с двумя параметрами. Обязательно использовать оператор return.


function sum($a,$b) {
    return $a + $b;
}

function dif($a,$b) {
    return $a - $b;
}

function mul($a,$b) {
    return $a * $b;
}

function div($a,$b) {
    return $a / $b;
}

echo sum(1,2);
echo "<br>";
echo dif(4,1);
echo "<br>";
echo mul(1.5,2);
echo "<br>";
echo div(9,3);