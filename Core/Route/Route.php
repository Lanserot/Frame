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

        for ($i = 0; $i < count($this->routes); $i++) {
            $route = RouteController::checkRoute($this->routes[$i], $this->url);
            if ($route !== false) {
                $this->callController($route);
                return;
            }
        }

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