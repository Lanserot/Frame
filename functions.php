<?php

require 'Core/ErrorLog/Error.php';
require 'autoload.php';


function ec(string $string)
{
    echo $string . "<br>";
}

function absolute(string $text): void
{
    ec("<div style='background: #000; color: white; padding: 10px; position: absolute; right: 0; top: 0;'>$text</div>");
}

/**
 * Функция для вывода массива
 */
function pre($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

/**
 * рандомный генератор чисел
 */
function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}