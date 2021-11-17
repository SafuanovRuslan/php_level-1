<?php
// Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, 
// например: 22 часа 15 минут, 21 час 43 минуты.


function showTime() {
    function getHour() {
        return date("G");
    }
    function getMinute() {
        return date("i");
    }

    function formatHour($hour) {
        if ( ($hour > 1 && $hour < 5) || ($hour > 21 && $hour < 25) ) {
            return $hour." часа";
        } elseif ( $hour == 1 || $hour == 21 ) {
            return $hour." час";
        } else {
            return $hour." часов";
        }
    }

    function formatMinute($minute) {
        if ( ($minute > 1 && $minute < 5) || 
             ($minute > 21 && $minute < 25) || 
             ($minute > 31 && $minute < 35) || 
             ($minute > 41 && $minute < 45) || 
             ($minute > 51 && $minute < 55) ) {
            return $minute." минуты";
        } elseif ( $minute == 1 || $minute == 21 || $minute == 31 || $minute == 41 || $minute == 51 ) {
            return $minute." минута";
        } else {
            return $minute." минут";
        }
    }

    return formatHour(getHour())." ".formatMinute(getMinute());
}

echo showTime();