<?php

namespace Core\Route;

/**
 * Класс для проверки данных рутера
 */
class RouteController
{
    /**
     * Фнукция для проверки валидности рутера
     */
    static function checkRoute($route, $url)
    {
        if ($route['route'] === $url) {
            if (empty($route['route'])) {
                echo "Не прописаны классы";
                return false;
            }
            if(empty($route['Cont']) || empty($route['func'])){
                return false;
            }
            return [$route['Cont'], $route['func']];
        }

        return false;
    }

    static function suitableRoute($routes, $url){
        $array = [];

        for ($i = 0; $i < count($routes); $i++) {
            if($routes[$i]['route'] == $url) {
                array_push($array, $routes[$i]);
            }
        }

        return $array;
    }
}