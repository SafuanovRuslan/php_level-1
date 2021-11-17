<?php
// Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, 
// $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций 
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).


function mathOperation($arg1, $arg2, $operation) {
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


    switch($operation) {
        case "sum": return sum($arg1,$arg2);
        case "dif": return dif($arg1,$arg2);
        case "mul": return mul($arg1,$arg2);
        case "div": return div($arg1,$arg2);
    }
}

echo mathOperation(15, 3, "dif");