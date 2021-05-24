<?php

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

        if (!isset($route['method'])) {
            $route['method'] = 'GET';
        }

        if ($route['route'] === $url) {
            if (empty($route['route'])) {
                echo "Не прописаны классы";
                return false;
            }

            if ($_SERVER['REQUEST_METHOD'] != $route['method']) {
                echo "Для этого пути нужен метод " . $route['method'];
                return false;
            }

            return [$route['Cont'], $route['func']];
        }

        return false;
    }
}