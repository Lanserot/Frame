<?php

spl_autoload_register(function ($name) {

    if(file_exists($name . '.php')){
        require $name . '.php';
    }
    if(file_exists('Controllers\\' . $name . '.php')){
        require 'Controllers\\' . $name . '.php';
    }
});


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