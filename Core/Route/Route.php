<?php

namespace Core\Route;



/**
 * Главный класс в рутере
 */
class Route
{
    private $url = [];
    private $routes = [];

    public function __construct()
    {
        $this->url = $_SERVER['REDIRECT_URL'] ?? '/';
        $this->routes = require $_SERVER['DOCUMENT_ROOT'] . '/configs/route.php';
    }

    /**
     * Проверка рутеров на валидность
     */
    private function start()
    {
        $error = '';


        /**
         * Вычленение нужных рутеров, которые подходят по url
         */
        $array = RouteController::suitableRoute($this->routes, $this->url);

        for ($i = 0; $i < count($array); $i++) {

            if (!isset($array[$i]['method'])) {
                $array[$i]['method'] = 'GET'; // Подставляю метод, если его нет
            }

            if ($array[$i]['method'] != $_SERVER['REQUEST_METHOD']){
                $error = 'Для данного пути нет метода ' . $_SERVER['REQUEST_METHOD'] . PHP_EOL . 'Есть только ' . $array[$i]['method'] . '<br>';
                continue;
            }else{
                $route = RouteController::checkRoute($array[$i], $this->url);
                if ($route !== false) {
                    $this->callController($route);
                    return true;
                }else{
                    $error = 'Контроллер или метод не найден';
                }
            }
        }
        ec($error);

        require $_SERVER['DOCUMENT_ROOT'] . '/view/404.php';
    }

    /**
     * Вызов контроллера, если рутер подходит
     */
    private function callController($class)
    {
        $name = '\Controllers\\'.$class[0];
        $start = new $name();
        $method = $class[1];
        $start->$method();
    }

    public function route()
    {
        $this->start();
    }
}